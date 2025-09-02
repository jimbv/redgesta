@section('yields.navigator')
<nav data-headlessui-state="" class="bg-none">
    <div class="mx-auto max-w-7xl px-2 md:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <!-- Botón hamburguesa (mobile) -->
            <div class="absolute inset-y-0 right-0 flex items-center md:hidden">
                <button id="headlessui-disclosure-button-v-0" type="button" aria-expanded="false" class="relative inline-flex items-center justify-center rounded-md p-2 ring-1 ring-white text-white hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="absolute -inset-0.5"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                </button>
            </div>

            <!-- Menú principal (desktop) -->
            <div class="hidden md:flex md:ml-auto md:justify-center md:flex-1">
                <div class="flex space-x-14">

                    <a href="/" class="text-[#fd661f] hover:scale-110 hover:font-bold duration-300 px-2 py-1 text-base font-semibold border-b-2 border-white">Inicio</a>
                    <a href="/" class="text-[#fd661f] hover:scale-110 hover:font-bold duration-300 px-2 py-1 text-base font-semibold border-b-2 border-white">Carreras</a>
                    <a href="/" class="text-[#fd661f] hover:scale-110 hover:font-bold duration-300 px-2 py-1 text-base font-semibold border-b-2 border-white">Cursos</a>
                    <a href="/" class="text-[#fd661f] hover:scale-110 hover:font-bold duration-300 px-2 py-1 text-base font-semibold border-b-2 border-white">Talleres</a>
                    <a href="/nosotros" class="text-[#fd661f] hover:scale-110 hover:font-bold duration-300 px-2 py-1 text-base font-semibold border-b-2 border-white">Nosotros</a>
                    <a href="/contacto" class="text-[#fd661f] hover:scale-110 hover:font-bold duration-300 px-2 py-1 text-base font-semibold border-b-2 border-white">Contacto</a>

                    <!-- Nuevo ítem con desplegable -->
                    <div class="relative group">
                        <button class="text-[#fd661f] hover:scale-110 hover:font-bold duration-300 px-2 py-1 text-base font-semibold border-b-2 border-white">
                            Accesos
                        </button>
                        <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md  w-56 z-50">
                            <a href="https://campus.aldeaeducativa.ag/" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Campus Alumnos</a>
                            <a href="https://comprasae.aldeaglobal.net.ar/user/" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pagos Alumnos</a>
                            <a href="https://comprasae.aldeaglobal.net.ar/ugs/" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Vendedores</a>
                            <a href="https://comprasae.aldeaglobal.net.ar/school/" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Instituciones</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>

@endsection