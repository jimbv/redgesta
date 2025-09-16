<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut  icon" href="/isotipo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Gesta</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <link rel="stylesheet" href="/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/YOUR_KIT_ID.js" crossorigin="anonymous"></script><!-- Versión gratuita de Font Awesome (sin cuenta) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>
    <header>
        @include('yields.navigator')
        @yield('yields.navigator')
    </header>

    <div class="  p-6 space-y-8">

        <!-- Encabezado -->
        <div class="flex items-center gap-6 border-b pb-4">
            <!-- Imagen a la izquierda -->
            <img src="/{{$curso->institution->url_logo}}" alt="{{$curso->institution->denominacion}}" class="h-24">

            <!-- Textos a la derecha -->
            <div>
                <h1 class="text-2xl font-bold text-purple-600">{{$curso->denominacion}}</h1>
                <h2 class="text-lg text-gray-700">{{$curso->institution->denominacion}}</h2>
            </div>
        </div>


        <!-- Cuerpo: 3 columnas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Columna 1: Imagen del curso -->
            <div>
                <img src="/{{$curso->imagen}}" alt="Curso" class="w-full rounded shadow">
            </div>

            <!-- Columna 2: Accordion -->
            <div class="space-y-2">

                <!-- Características -->
                <details class="bg-purple-600 text-white rounded overflow-hidden">
                    <summary class="cursor-pointer px-4 py-2 font-semibold select-none flex items-center gap-2">
                        <i class="fa-solid fa-list text-cyan-400"></i>
                        Características
                    </summary>
                    <div class="bg-white text-black px-4 py-2">
                        {!! nl2br(e($curso->caracteristicas)) !!}
                    </div>
                </details>

                <!-- Tipo -->
                <details class="bg-purple-600 text-white rounded overflow-hidden">
                    <summary class="cursor-pointer px-4 py-2 font-semibold select-none flex items-center gap-2">
                        <i class="fa-solid fa-bars-staggered text-cyan-400"></i>
                        Tipo
                    </summary>
                    <div class="bg-white text-black px-4 py-2">
                        {{ ucfirst(strtolower($curso->tipo)) }}
                    </div>
                </details>

                <!-- Duración -->
                <details class="bg-purple-600 text-white rounded overflow-hidden">
                    <summary class="cursor-pointer px-4 py-2 font-semibold select-none flex items-center gap-2">
                        <i class="fa-solid fa-calendar-alt text-cyan-400"></i>
                        Duración
                    </summary>
                    <div class="bg-white text-black px-4 py-2">
                        {{ $curso->duracion }}
                    </div>
                </details>

                <!-- Requisitos -->
                <details class="bg-purple-600 text-white rounded overflow-hidden">
                    <summary class="cursor-pointer px-4 py-2 font-semibold select-none flex items-center gap-2">
                        <i class="fa-solid fa-check text-cyan-400"></i>
                        Requisitos
                    </summary>
                    <div class="bg-white text-black px-4 py-2">
                        {!! nl2br(e($curso->requisitos)) !!}
                    </div>
                </details>

                <!-- Examen -->
                <details class="bg-purple-600 text-white rounded overflow-hidden">
                    <summary class="cursor-pointer px-4 py-2 font-semibold select-none flex items-center gap-2">
                        <i class="fa-solid fa-pen-to-square text-cyan-400"></i>
                        Examen
                    </summary>
                    <div class="bg-white text-black px-4 py-2">
                        {{ $curso->examen }}
                    </div>
                </details>

                <!-- Programa de estudio -->
                <details class="bg-purple-600 text-white rounded overflow-hidden">
                    <summary class="cursor-pointer px-4 py-2 font-semibold select-none flex items-center gap-2">
                        <i class="fa-solid fa-eye text-cyan-400"></i>
                        Programa de estudio
                    </summary>
                    <div class="bg-white text-black px-4 py-2">
                        {!! nl2br(html_entity_decode($curso->programa_de_estudio)) !!}
                    </div>
                </details>

                <!-- Precio -->
                <details class="bg-purple-600 text-white rounded overflow-hidden">
                    <summary class="cursor-pointer px-4 py-2 font-semibold select-none flex items-center gap-2">
                        <i class="fa-solid fa-dollar-sign text-cyan-400"></i>
                        Precio
                    </summary>
                    <div class="bg-white text-black px-4 py-2">
                       $ {!! number_format($curso->precio, 2, ',', '.') !!}
                    </div>
                </details>

            </div>


            <!-- Columna 3: Formulario de contacto -->
            <div class="bg-gray-100 p-4 rounded shadow space-y-4">
                <h2 class="text-lg font-semibold text-purple-600">Solicitá más información</h2>
                <div class="flex-1 w-full">
                @if(session('status'))
                <div class="p-4 bg-green-100 text-green-800 rounded">
                    {{ session('status') }} 
                </div>
                <p>
                </p>
                @endif
                <form  method="POST" action="/curso/{{$curso->id}}" >
                    @csrf 
                    <div class="pb-3">
                        <input type="text" placeholder="Apellido y Nombre" id="nombre" name="nombre" class="w-full  rounded p-2" required>
                    </div>
                    <div class="pb-3">
                        <input type="email" placeholder="Email" id="email" name="email" class="w-full border rounded p-2" required>
                    </div>
                    <div class="pb-3"> 
                        <input type="text" placeholder="Teléfono" id="telefono" name="telefono" class="w-full  rounded p-2" required>
                    </div>
                    <div class="pb-3">
                        <textarea id="mensaje" placeholder="Mensaje" name="mensaje" rows="4" class="w-full  rounded p-2" required></textarea>
                    </div>
                    <div>
                        <input type="hidden" name="curso" value="{{$curso->denominacion}}">
                                        
                    {!! NoCaptcha::display() !!}
                    <br>

                    @error('g-recaptcha-response')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    </div>
                    <button type="submit" class="bg-[#fd661f] text-white px-6 py-2 rounded hover:bg-[#ff952c] transition font-semibold">Enviar</button>
                </form>

                {!! NoCaptcha::renderJs() !!}
            </div>
            </div>

        </div>
    </div>


</body>

<footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2023 Red Gesta. Todos los derechos reservados.</p>
    </div>
</footer>

</html>