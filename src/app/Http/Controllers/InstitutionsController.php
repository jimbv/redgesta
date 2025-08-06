<?php

namespace App\Http\Controllers;

use App\Models\Institutions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class InstitutionsController extends Controller
{
    public function index()
    {
        try {
            $institutions = Institutions::all()->map(function ($item) {
                return [
                    'ID' => $item->ID,
                    'denominacion' => $item->denominacion,
                    'descripcion' => $item->descripcion,
                    'url_logo' => $item->url_logo,
                    'url_imagen' => $item->url_imagen,
                    'created_at' => $item->created_at,
                    'updated_at' => $item->updated_at,
                    'id' => $item->id,
                ];
            });
            return response()->json($institutions);
        } catch (\Exception $e) {
            Log::error('Error fetching institutions: ' . $e->getMessage());
            return response()->json(['message' => 'Failed to fetch institutions'], 500);
        }
    }

    public function sync()
    {
        try {
            Log::info('Starting sync of institutions');
            $response = Http::withToken(env('ALDEA_TOKEN_JWT'))
                ->get(env('ALDEA_API_URL') . 'Institucion/Retrieve');

            if ($response->successful()) {
                Log::info('API request successful', ['response' => $response->json()]);
                $institutions = $response->json();
                $synced = [];
                foreach ($institutions as $institutionData) {
                    Log::info('Processing institution', ['institution' => $institutionData]);
                    $institution = Institutions::updateOrCreate(
                        ['ID' => $institutionData['ID']],
                        [
                            'ID' => $institutionData['ID'],
                            'denominacion' => $institutionData['Denominacion'],
                            'descripcion' => $institutionData['Descripcion'],
                            'url_logo' => $institutionData['UrlLogo'] ?? null,
                            'url_imagen' => $institutionData['UrlImagen'] ?? null,
                        ]
                    );
                    $synced[] = [
                        'id' => $institution->id,
                        'denominacion' => $institution->denominacion,
                        'descripcion' => $institution->descripcion,
                        'url_logo' => $institution->url_logo,
                        'url_imagen' => $institution->url_imagen,
                        'created_at' => $institution->created_at,
                        'updated_at' => $institution->updated_at,
                        'ID' => $institution->ID,
                    ];
                }
                Log::info('Institutions synced successfully');
                return response()->json($synced, 200);
            }

            Log::error('Failed to sync institutions: API request unsuccessful', ['response' => $response->body()]);
            return response()->json(['message' => 'Failed to sync institutions'], 500);
        } catch (\Exception $e) {
            Log::error('Error syncing institutions: ' . $e->getMessage(), ['exception' => $e]);
            return response()->json(['message' => 'Failed to sync institutions'], 500);
        }
    }
}