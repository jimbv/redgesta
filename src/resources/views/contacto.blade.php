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
        <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
            <!-- Imagen a la izquierda -->
            <div class="flex-1 flex justify-center mb-8 md:mb-0">
   <div class="bg-white py-10 text-gray-800 px-6">
    <div class="max-w-xl mx-auto space-y-4">
        
                <img src="/imgs/redgesta.png" alt="Red Gesta" class="w-64 mx-auto"> <br>
        <!-- Información de contacto -->
        <div class="flex items-center gap-4">
            <img src="/imgs/phone.svg" alt="Teléfono" class="w-5 h-5">
            <span>+54 9 3534 611855</span>
        </div>
        <div class="flex items-center gap-4">
            <img src="/imgs/mail.svg" alt="Email" class="w-5 h-5">
            <span>info@redgesta.com</span>
        </div>
        <div class="flex items-center gap-4">
            <img src="/imgs/location.svg" alt="Ubicación" class="w-5 h-5">
            <span>Lisandro de la Torre 86, Villa María, Córdoba</span>
        </div>

        <!-- Redes sociales -->
        <div class="flex items-center gap-4">
            <img src="/imgs/whatsappb.svg" alt="WhatsApp" class="w-5 h-5">
            <span>¡Escríbenos!</span>
        </div>
        <div class="flex items-center gap-4">
            <img src="/imgs/instagram.svg" alt="Instagram" class="w-5 h-5">
            <span>redgestaok</span>
        </div>
        <div class="flex items-center gap-4">
            <img src="/imgs/facebook.svg" alt="Facebook" class="w-5 h-5">
            <span>redgestaok</span>
        </div>

    </div>
</div>

            <!-- Formulario a la derecha -->
            </div>
            <div class="flex-1 w-full">
                @if(session('status'))
                <div class="p-4 bg-green-100 text-green-800 rounded">
                    {{ session('status') }}
                </div>
                @endif
                <form class="bg-white rounded-lg shadow p-6 space-y-4" method="POST" action="/contacto">
                    @csrf
                    <h2 class="text-2xl font-bold text-[#fd661f] mb-4">Contacto</h2>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-1" for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="w-full border rounded p-2" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-1" for="email">Email</label>
                        <input type="email" id="email" name="email" class="w-full border rounded p-2" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-1" for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="4" class="w-full border rounded p-2" required></textarea>
                    </div>
                    <button type="submit" class="bg-[#fd661f] text-white px-6 py-2 rounded hover:bg-[#ff952c] transition font-semibold">Enviar</button>
                </form>
            </div>
        </div>
    </main>

</body>

<footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2023 Red Gesta. Todos los derechos reservados.</p>
    </div>
</footer>

</html>