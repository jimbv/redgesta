<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Category;
use App\Models\Institutions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    public function index()
    {
        try {
            $courses = Courses::with('categories')->get();
            return response()->json($courses);
        } catch (\Exception $e) {
            Log::error('Error fetching courses: ' . $e->getMessage());
            return response()->json(['message' => 'Failed to fetch courses'], 500);
        }
    }

    /**
     * Buscar cursos por filtros: área (categoría), institución y texto libre.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(Request $request)
    {
        Log::info('Parámetros recibidos en search:', $request->all());

        $query = Courses::with('categories');

        // Filtro por área/categoría
        if ($request->filled('category_id')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('categories.id', $request->input('category_id'));
            });
            Log::info('Filtro por categoría aplicado: ' . $request->input('category_id'));
        }

        // Filtro por institución (usando Institutions.ID)
        if ($request->filled('institution_id')) {
            $internalId = $request->input('institution_id');
            $institution = Institutions::find($internalId);
            if ($institution && $institution->ID) {
                $query->where('institucion', $institution->ID);
                Log::info('Filtro por institución aplicado: ' . $institution->ID . ' (desde institution_id: ' . $internalId . ')');
            } else {
                Log::warning('Institución no encontrada para institution_id: ' . $internalId);
                return response()->json([]);
            }
        }

        // Filtro por grado de formación (campo tipo)
        if ($request->filled('grado_formacion')) {
            $query->where('tipo', $request->input('grado_formacion'));
            Log::info('Filtro por grado de formación aplicado: ' . $request->input('grado_formacion'));
        }

        // Filtro por texto libre
        if ($request->filled('q')) {
            $q = $request->input('q');
            $query->where(function ($sub) use ($q) {
                $sub->where('denominacion', 'like', "%{$q}%")
                    ->orWhere('descripcion', 'like', "%{$q}%");
            });
            Log::info('Filtro por texto aplicado: ' . $q);
        }

        Log::debug('SQL generado: ' . $query->toSql());

        $courses = $query->get();

        Log::info('Cursos encontrados: ' . $courses->count());
        Log::debug('IDs de cursos encontrados: ' . $courses->pluck('ID')->implode(', '));

        return response()->json($courses);
    }

    /**
     * Obtener todos los datos de un curso por su ID desde la API externa.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCourseDetailsById($id)
    {
        try {
            $course = Courses::with('categories')->where('ID', $id)->first();

            if ($course) {
                return response()->json($course, 200);
            } else {
                return response()->json(['message' => 'Course not found'], 404);
            }
        } catch (\Exception $e) {
            Log::error('Error fetching course details from DB: ' . $e->getMessage());
            return response()->json(['message' => 'Failed to fetch course details'], 500);
        }
    }

    public function syncCourses()
    {
        try {
            $response = Http::withToken(env('ALDEA_TOKEN_JWT'))
                ->get('https://api.aldeaeducativa.ag/api/V3/Cursos/Retrieve');
            Log::info('Token usado: ' . env('ALDEA_TOKEN_JWT'));


            if ($response->successful()) {
                dd($response->json()[166]);
                $courses = $response->json();
                foreach ($courses as $courseData) {
                    // Validar si 'ID' está presente y no es nulo
                    if (empty($courseData['ID'])) {
                        //   Log::error('Curso omitido por falta de ID: ' . json_encode($courseData));
                        continue; // Saltar este curso
                    }

                    $course = Courses::updateOrCreate(
                        ['denominacion' => $courseData['Denominacion']],
                        [
                            //'ID' => $courseData['ID'],
                            'institucion' => $courseData['Institucion'],
                            'denominacion' => $courseData['Denominacion'],
                            'descripcion' => $courseData['Descripcion'],
                            'imagen' => $courseData['Imagen'] ?? null,
                            'caracteristicas' => $courseData['Caracteristicas'] ?? null,
                            'duracion' => $courseData['Duracion'] ?? null,
                            'requisitos' => $courseData['Requisitos'] ?? null,
                            'certificacion' => $courseData['Certificacion'] ?? null,
                            'modalidad' => $courseData['Modalidad'] ?? null,
                            'examen' => $courseData['Examen'] ?? null,
                            'programa_de_estudio' => $courseData['Programa_de_estudio'] ?? null,
                            'show_purchase_button' => filter_var($courseData['SHOW_PURCHASE_BUTTON'] ?? false, FILTER_VALIDATE_BOOLEAN),
                            'tipo' => $courseData['TIPO'] ?? null,
                            'precio' => is_numeric($courseData['PRECIO']) ? $courseData['PRECIO'] : null, // Valida que sea un número
                        ]
                    );

                    // Procesa las categorías si están presentes
                    if (isset($courseData['Categorias'])) {
                        $existingCategoryIds = Category::whereIn('id', $courseData['Categorias'])->pluck('id')->toArray();
                        if (count($existingCategoryIds) !== count($courseData['Categorias'])) {
                            // Log::error('Algunas categorías no existen: ' . json_encode($courseData['Categorias']));
                            continue;
                        }
                        $course->categories()->sync($existingCategoryIds);
                    }
                }
                return response()->json(['message' => 'Courses synced successfully'], 200);
            }

            // Log::info('Respuesta API: ' . $response->body());
            //Log::error('Failed to sync courses: API request unsuccessful');
            return response()->json(['message' => 'Failed to sync courses'], 500);
        } catch (\Exception $e) {
            dd($e->getMessage());
            Log::error('Error syncing courses: ' . $e->getMessage());
            return response()->json(['message' => 'Failed to sync courses'], 500);
        }
    }

    public function updateAllCourseDetails()
    {
        set_time_limit(1500);
        ini_set('memory_limit', '9512M');

        try {
            // Obtener todos los IDs de la tabla courses
            $courseIds = Courses::pluck('ID')->toArray();

            if (empty($courseIds)) {
                Log::warning("No se encontraron IDs en la tabla courses.");
                return response()->json(['message' => 'No courses found in the database'], 404);
            }

            
// Empezar desde el curso número 10 (índice 9 porque arranca en 0) HAY 629
$desde = 150; // Recordá que los arrays empiezan en 0
$longitud = 230 - 150; // Cantidad de elementos a procesar

$courseIds = array_slice($courseIds, $desde, $longitud);

            foreach ($courseIds as $courseId) {
                // Consultar la API para obtener los datos del curso por ID
                $response = Http::withToken(env('ALDEA_TOKEN_JWT'))
                    ->get("https://api.aldeaeducativa.ag/api/v3/Cursos/RetrieveAllData?", [
                        'ID' => $courseId,
                    ]);

                Log::info("Respuesta de la API para el ID {$courseId}: " . $response->body());

                if ($response->successful()) {
                    $courseDataArray = $response->json();

                    // Asegúrate de que la respuesta es un array
                    if (!is_array($courseDataArray) || empty($courseDataArray)) {
                        Log::info("No se encontraron datos para el curso con ID {$courseId}.");
                        continue;
                    }

                    // Itera sobre los datos (incluso si es un solo curso)
                    foreach ($courseDataArray as $courseData) {
                        // Validar si el curso tiene datos
                        if (!isset($courseData['ID'])) {
                            Log::error("El curso no tiene un ID válido: " . json_encode($courseData));
                            continue;
                        }



                        // guardar imagen
                        if (isset($courseData['Imagen'])) {
                            try {
                                $rutaNormalizada = str_replace('\\', '/', $courseData['Imagen']);
                                $partes = explode('/', $rutaNormalizada);
                                $nombreOriginal = end($partes);

                                // Limpiar nombre
                                $extension = pathinfo($nombreOriginal, PATHINFO_EXTENSION);
                                $nombreLimpio = Str::slug(pathinfo($nombreOriginal, PATHINFO_FILENAME));
                                $nuevoNombre = $nombreLimpio . '.' . strtolower($extension);

                                $url = 'https://www.redgesta.ar/' . implode('/', array_map('rawurlencode', $partes));
                                Log::info("Intentando descargar imagen: {$url}");

                                // Descargar con manejo de errores
                                $response = Http::timeout(15)->get($url);

                                if (!$response->successful()) {
                                    Log::warning("No se pudo descargar la imagen: $url (status: {$response->status()})");
                                    continue;
                                }

                                $contenido = $response->body();
                                if (empty($contenido)) {
                                    Log::error("Contenido vacío al descargar: $url");
                                    continue;
                                }

                                $rutaDestino = public_path('imagenes/' . $nuevoNombre);
                                $resultado = @file_put_contents($rutaDestino, $contenido);

                                if ($resultado === false) {
                                    Log::error("No se pudo guardar la imagen localmente en: $rutaDestino");
                                    continue;
                                }

                                $courseData['Imagen'] = 'imagenes/' . $nuevoNombre;
                                sleep(1);
                            } catch (\Throwable $e) {
                                Log::error("Excepción al descargar imagen del curso ID {$courseId}: " . $e->getMessage());
                                continue;
                            }
                        }






                        // Mapear y limpiar los datos del curso
                        $mappedCourseData = [
                            'ID' => $courseData['ID'],
                            'institucion' => $courseData['Institucion'],
                            'denominacion' => $courseData['Denominacion'],
                            'descripcion' => $this->sanitizeField($courseData['Descripcion']) ?? 'Descripción no disponible',
                            'imagen' => isset($courseData['Imagen']) ? $courseData['Imagen'] : null,
                            'caracteristicas' => isset($courseData['Caracteristicas']) ? $this->sanitizeField($courseData['Caracteristicas']) : null,
                            'duracion' => isset($courseData['Duracion']) ? $this->sanitizeField($courseData['Duracion']) : null,
                            'requisitos' => isset($courseData['Requisitos']) ? $this->sanitizeField($courseData['Requisitos']) : null,
                            'certificacion' => isset($courseData['Certificacion']) ? $this->sanitizeField($courseData['Certificacion']) : null,
                            'modalidad' => isset($courseData['Modalidad']) ? $this->sanitizeField($courseData['Modalidad']) : null,
                            'examen' => isset($courseData['Examen']) ? $this->sanitizeField($courseData['Examen']) : null,
                            'programa_de_estudio' => isset($courseData['Programa_de_estudio']) ? $this->sanitizeField($courseData['Programa_de_estudio']) : null,
                            'show_purchase_button' => filter_var($courseData['SHOW_PURCHASE_BUTTON'] ?? false, FILTER_VALIDATE_BOOLEAN),
                            'tipo' => isset($courseData['TIPO']) ? $this->sanitizeField($courseData['TIPO']) : null,
                            'precio' => isset($courseData['PRECIO']) && is_numeric($courseData['PRECIO']) ? $courseData['PRECIO'] : null,
                        ];

                        if (empty($mappedCourseData['descripcion'])) {
                            Log::error("El curso con ID {$courseId} tiene una descripción nula o vacía. Curso omitido.");
                            continue;
                        }

                        // Insertar o actualizar el curso en la base de datos
                        $course = Courses::updateOrCreate(
                            ['ID' => $mappedCourseData['ID']],
                            $mappedCourseData
                        );

                        // Procesar las categorías si están presentes
                        if (isset($courseData['Categorias'])) {
                            $existingCategoryIds = Category::whereIn('id', $courseData['Categorias'])->pluck('id')->toArray();
                            if (count($existingCategoryIds) !== count($courseData['Categorias'])) {
                                Log::warning("Algunas categorías no existen para el curso con ID {$courseId}: " . json_encode($courseData['Categorias']));
                                continue;
                            }
                            $course->categories()->sync($existingCategoryIds);
                        }

                        Log::info("Curso procesado: ID {$courseId}, Denominación: {$course->denominacion}");
                    }
                } else {
                    Log::error("Error al obtener los datos del curso con ID {$courseId}: " . $response->body());
                }
            }

            return response()->json(['message' => 'Courses updated successfully'], 200);
        } catch (\Exception $e) {
            Log::error('Error updating courses: ' . $e->getMessage());
            dd($e->getMessage());
            return response()->json(['message' => 'Failed to update courses'], 500);
        }
    }

    /**
     * Validar los datos del curso obtenidos desde la API.
     *
     * @param array $courseData
     * @return bool
     */
    private function validateCourseData(array $courseData): bool
    {
        // Validar que los campos obligatorios existan y no estén vacíos
        $requiredFields = ['Caracteristicas', 'Duracion', 'Requisitos', 'Certificacion', 'Modalidad', 'Examen', 'TIPO', 'PRECIO'];

        foreach ($requiredFields as $field) {
            if (isset($courseData[$field]) && !is_string($courseData[$field]) && !is_null($courseData[$field])) {
                Log::warning("Campo {$field} tiene un valor inválido: " . json_encode($courseData[$field]));
                return false; // El campo es inválido
            }
        }

        // Validar que el precio, si está definido, sea numérico
        if (isset($courseData['PRECIO']) && !is_numeric($courseData['PRECIO'])) {
            Log::warning("El campo PRECIO tiene un valor no numérico: " . json_encode($courseData['PRECIO']));
            return false;
        }

        return true; // Todos los datos son válidos
    }

    /**
     * Sanitize a field by removing HTML tags and special characters.
     *
     * @param string $field
     * @return string|null
     */
    private function sanitizeField($field)
    {
        if (is_null($field) || trim($field) === '') {
            return 'Descripción no disponible';
        }

        $cleaned = strip_tags($field);

        return htmlspecialchars($cleaned, ENT_QUOTES, 'UTF-8');
    }

    public function show($id)
    {
        $curso = Courses::with(['categories', 'institution'])->findOrFail($id);
        return view('curso', compact('curso'));
    }
}
