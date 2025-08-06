<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/isotipo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Gesta</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    @livewireScripts

</head>
<body>
    <header>
        @include('yields.navigator')
        @yield('yields.navigator')
    </header>

    <main class="max-w-3xl mx-auto px-4 py-12">
        <div class="flex justify-center mb-10">
            <img src="/imgs/redgesta.png" alt="Red Gesta" class="w-100 mx-auto">
        </div>
        <section class="mb-10">
            <h2 class="text-2xl font-bold text-[#fd661f] mb-2">Misión</h2>
            <p class="text-lg mb-6">“Somos una red de formación y capacitación educativa, con tecnología multiplataforma, de fácil acceso y sin distancias, para todas las etapas de la vida y en el marco de la inclusión social“</p>
        </section>
        <section class="mb-10">
            <h2 class="text-2xl font-bold text-[#fd661f] mb-2">Visión</h2>
            <p class="text-lg mb-6">“Ser el Campus Virtual por excelencia en la provisión de contenidos y servicios educativos, culturales y artísticos “</p>
        </section>
        <section class="mb-10">
            <h2 class="text-2xl font-bold text-[#fd661f] mb-2">Valores</h2>
            <ul class="list-disc list-inside text-lg space-y-1">
                <li>Innovación</li>
                <li>Trabajo en Equipo</li>
                <li>Sostenimiento y acompañamiento educativo</li>
                <li>Compromiso</li>
                <li>Profesionalidad</li>
                <li>Mejora continua y actualización</li>
                <li>Eficacia y Eficiencia</li>
            </ul>
        </section>
        <section class="mb-10">
            <h2 class="text-2xl font-bold text-[#fd661f] mb-2">Objetivo Fundacional de la Red Gesta</h2>
            <p class="text-lg mb-6">
                Ser una red de formación y capacitación a distancia, de contenidos nacionales e internacionales en el ámbito educativo, cultural y artístico, basada en una multiplataforma tecnológica, con un sistema totalmente inclusivo a nivel social, en el cual cualquier persona pueda estudiar, aun los que no posean herramientas tecnológicas (PC, Tablet, Smartphone o conexión de Internet), pues pueden cursar en cualquiera de nuestras más de 100 aulas distribuidas en todo el territorio nacional.
            </p>
        </section>
    </main>

</body>

<footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2023 Red Gesta. Todos los derechos reservados.</p>
    </div>
</footer>   
</html>