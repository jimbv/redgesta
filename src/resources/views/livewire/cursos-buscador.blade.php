<div>
    <header>

        @yield('yields.navigator')
     

        <div class="w-full flex flex-wrap justify-center items-center mt-4 gap-y-8 gap-x-24 px-2">
            <img class="w-4/12 md:w-[150px]" src="/imgs/logbla.svg" alt="Logo Gesta">
            <img class="w-6/12 md:w-[210px]" src="/imgs/educacionSinLimites.png" alt="Educación Sin Limites">

        </div>
        <hr class="w-8/12 m-auto mt-10 md:hidden">

        <div class="flex flex-wrap justify-center items-center mt-8 mb-16 gap-y-12">
            <h2 class="text-[#FD661F] text-3xl md:text-5xl self-start italic font-bold md:transform md:translate-x-20 md:translate-y-5 hidden md:block"> Estudiá <br> Online </h2>
            <h2 class="text-[#FD661F] text-3xl self-start italic font-bold md:hidden"> Estudiá Online </h2>
            <img src="/imgs/compu.svg" alt="Compu.svg" class="w-9/12 md:w-[430px] shadowPNG">
            <div class="md:ml-32 md:translate-x-0 transform translate-x-20"><img src="/imgs/masDe500.png" class="w-8/12" alt=""><a href="/contacto" class="m-auto"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAU8AAAA/CAYAAABgmEqHAAAACXBIWXMAAAsSAAALEgHS3X78AAAPjklEQVR4nGL8//8/AxYQwMDAYMDAwOCATXIUjIJRMApGAPjAwMBwgYGBYQOURgAGBgYAAAAA//9CLzxBheUCBgYG+dGUMQpGwSgYBXBwkIGBoQBeiDIwMAAAAAD//0IuPBMYGBjmj4bVKBgFo2AUYAUfoQ3MCwwMDAwAAAAA//+CFZ6gLvr50fAaBaNgFIwCvABUgBowMDA8AAAAAP//YoIqmzAaXqNgFIyCUUAQ8DMwMDQwMDAwAAAAAP//ArU8FRgYGO6PhtkoGAWjYBQQCRgYGAEAAAD//2IanVEfBaNgFIwCEgEDgwMAAAD//wIVngqj4TYKRsEoGAUkAAYGBgAAAAD//2IaDa9RMApGwSggETAwMAAAAAD//xotPEfBKBgFo4BUwMDAAAAAAP//Gi08R8EoGAWjgFTAwMAAAAAA//8aLTxHwSgYBaOAVMDAwAAAAAD//xotPEfBKBgFo4BUwMDAAAAAAP//Gi08R8EoGAWjgFTAwMAAAAAA//8aLTxHwSgYBaOAVMDAwAAAAAD//xotPEfBKBgFo4BUwMDAAAAAAP//Gi08R8EoGAWjgFTAwMAAAAAA//9iGXSB9ukJBMOAjMXwsIveAN1voloMDOx8w8d/o2BgAL3zzGBNxwwMDAAAAAD//xr4whMUMHd3MTA8Ps7A8OQEdjWgwAJFkqwlA4NWCG3t4pNB2KXsRpr5ILOvrkbwQWYYJpHuzvPzIG5kgPrdKBmSaPABYsMRZA4sHPElwp+fGBjOzWVgeH2NNHegm3G8H5H48ZmB7GcQ0A4lLfxB7ryzE+FeagCQO0HuAKUJQgAW9yD7Qf4G6QFhUv0BAwOZlpABrfMMOfaRko5pBRgYGAAAAAD//wKdqgQ6Xqme7jbDMta1NaTpAwWUZSFphSgoQkAFAal2gRIFyC5iEgQoojelYoqDEjzIDGIByI0HGjHdEbMduwGwQg6USUgF+NwGMg8UP8gAFPbJR4m3BOQP9DDH5hdsfgaB0JXEZXRQ/K4Oh4QFtQHIzyD34suguOIeBvxmk9ZCG6i0hAzokWeQAa3SMa0AA4MjAAAA///EmF0KwCAMg3u9nWdX2iV2u/HhCmWk+AOdAd/E1JpgdM+fJzfLdcwfjL1NRhDKbBkXxlrhQkD32UbPmFniQQzUMArF8326OJiLyVYE57XRG4WYAiNflgYU1Fy1l6y3o1ye9irAur00GxOiAol4Bju0FPGXZ2KdVTqugpk9AAAA//+if+EJihBSAhafOYQKUGrZBUpMoMgl1xyQOwklWEIAm36QmyjtpoL0k5toCQFcfqY0LNDBQI6BwbqZ+AAoHVKrcKdVWoKBgcgzgz0dYwMMDAwAAAAA//+ib+FJTIFHqnm4WifUtgsUOeQWoLDWMjUBKKHgS3CgbiKoKwMb4sA3boetlTmUAC0nEWDja7gAsS1Bclpx2AAt0hIMDESeGarpmIGBAQAAAP//1NnrCcAgDEZRp+gS3X+ULtEpykEKEtRikT7yU3zGayRfnisY+e2ihhaNY2gly5qh5fR9y4C2fkuOj3qSth4E5rYOwbl8dMZJwXpr0WXu6CuCPFDuiP41a6WKALO/WjBp6VgjBYQvmrPSR3GCl5F09SzsRDMnDnHSC8xXKXvZb9bdz2Ypvfhm/spxSukAAAD//6Jf4QmKGFw1EL5JIFCEgeRAAQUqfIlp+eErpGHmYcswoEIYlCCxTZbAAEgOlIDIWaIBMhMUwZQu78BXEDjgmfuDyau4I7pmsBnYoQ5AfsNXmOCKU9BsOLmFEKgQwxYPsDSEDEDqQOqptbSHWmkJ2TxcgFZ5ZiinYwYGBgAAAAD//6JPtx2UaPAtOwDNRhKaPQfJg1oXyDURKPGg68NnF0itey/hpSegxIAv8ohtbWAD+CoRYgGuWp7YGU5QIgaFJUg9epiOAuIBtokgUJoEZWJsYUrqxBEhQI20xDCAeWYop2MGBgYAAAAA//+iT+GJL9GAApzY5jYoAkEFLYgGRSqIjR5guAo22BIKYgGs24AN4BtGIARA+mg1ZkXKTDgoPIjJFKMAOwAVWtjGMUGtIVgXFx1Qc+KIgYppabDlmaGQjhkYGAAAAAD//6JP4YlrUB1Uc5C6HgxU0ILWqYEKXWw1DS67cLUG8AF8C3CJnSjA1qIG6aVkZhBXQhmAGccRC3DFPyy+QYUoNkDKUiNcZiMDStMSwwDmmaGcjhkYGAAAAAD//6J94YlvDR5ovImaAF+NRc7OJFAiwKXv42PizMA1VoS8e4dUgGuSgwE6djXXGjIWBEqApNTio4B4gK21hjy5BGoYYIsjSoZ8aJGWBjLPDOV0zMDAAAAAAP//on3hia+bQu19sbgSECX2gGZcsQFiuyCgxATqVqAD2JITcrtx+CoekJmgWh6UAEFLRabpIhYhU3uN5UgEoHSGLa2htzaxxREuvcQAWqSlgc4zQzUdMzAwAAAAAP//ok/LExsA1Tj0GuAFzfSRC3C5kZSaEDTUgG0sCLaMgxwAGqAnZWkGyL2gRAja2QXKaNTcAz7SALbWI7ZxTlxDUpS0PmmRlrABeuWZoZqOGRgYAAAAAP//Grgj6YbKRAW1WsegRILNLFK33CEDUvdMwwBo4gK0nW10fJQ8gC2+sHVVYQdmoAOQfkomjmiRlqgJSE2TQzEdMzAwAAAAAP//Gj3PkxCgZs0G6nJhq5XJ3XIHW+YFmjwjpzIC1eC0mvkfrgDXjDmu7ie2iSNYd5QSQO20RE1Aap4ZiumYgYEBAAAA//+ifeFJjW4vpQC064RcgKuFQM5uBkJjVuQCUKsHtAIBZDahLWzoAFQYUGvr4EgA2JbdgcIbtggeHeNK/5R03RlomJZgYCDyzFBKxwwMDAAAAAD//6L9DiN8AUDNHRcMeCKHkoIa35gtOQB5Rwa6GyntfoDG2GDjbLATkECZAETjaw2AxsooOSeVVDBUF+XDCkhs4viOpMMGYBNHlGwppEZaGox5ZiikYwYGBgAAAAD//6J9yxNf4UjtHRe4IofUo9SQAS434ppRJAaABvyxJVpQ94NahxvAJjBAdoF2X4C6RbgyCijzE9vVokaXcKjupaf2eCKlrU8GKqSlwZ5naJWOKQUMDAwAAAAA//+iz5gnrllHUDObVM+CIhW0/gtU06NHLigh4ApYcmYi8dV0lLaYcY1Z0Wo4A+ReUMLDBdC7WrgyFbHdueG4vpQahR0yoHTiCAYoSUtDKc/AzCAlHdMKMDAwAAAAAP//ok/hiW/ZA6nr02DqYadto7cGcO3sILVbDLIDtEAXG8CX4IgFpG59QwfkHB8Gu86EGMAvi10RsRkeV+tjqN4TRcmWXFyAGhNHDFRISwOZZ2idjmkFGBgYAAAAAP//xJ1LCgAhDEN7/1PLWwREmvE72r30Y2pL0XiHVYk5BFUsA584/3rvU/VtRws2uoG6s5WuLMHF+tJj0RE9lzskTrG3YCud3OygmxgIcNiavfF3MtrpO3BqH75IINDhfNq5P/hSXDEASyM+sT6LCfg9MadbxVI8zJkbOP5LIqIAAAD//8SdSw7AIAhEuf+pm7eYhBCZ1sbPLNVFJWMBP8M5STo8Y+eVMASXXkXEvHDpwwM6zcAMSVN18li0Q2QV5hppEzoC8m0rN6WxSydt1iGnU7Idc34rhuXIXX+WRAk6Ra7QdZ1aTExiGS7dm9Ey4DnfTPq/KxpxEeLX99+MGfFqxcGR8IdLcXHNnODxLkTEAwAA///EnUsKACAIRL3/qeMtBiLU/jXQvnQckyTfiSdGxyiZkSkRZl+cvayPCGfT95QllfUikWiBQ7Mb1wrUcjIzg8WbAQTBISN2puSug7H3YW2UDCByVFIhJhIUCDsyR+h2+wln99p3dhHtofdRcg38wfJuTPjmBK9WuCT8iJlXPL4BMysAAAD//7ydwQoAIAhD/f+vjh0GEg6N1HfuUDFTiuZu62Fkxp+/vTe0pouAiKq9UaoioB1eN/xylzntEwgrCmhlk5atS11DYG9RcWTVX6U6pOH1JDjMu6o4j3ooUneFCoyP9Ih5dyXlVy15tmNmS8cTmNkBAAD//6LvDiNYYFJ6tzMDUi2Lq+aH2UWNZjzMLFouscG15Q4GkBMgruUp5ABcJ/XAACiMKbULFn70WN9J7dlWUEGC67RzUtMxru4oOYUFPkBKWkIG9M4z9EzH1AYMDAwAAAAA//+i//ZMWKGH634SYgAockE7EQgFPCwCKbELtuuB3B1FpABclQFIDDlhUCORw+KBUFeH0goPFG6EMhE1x6nwFQykiMMArlY1Occp4msdEVoCRqu0hE2eXnmGnumY2oCBgQEAAAD//2JuaGhwAJ3nTnebJQ0hCZCDH1LzfntNWA/spGrTLAYGFnba2QWKEHVfSKSo+xFnl5AyJKMhm21bQVqhC7IHNIYLMgfWgoJ1d9HNAakFuU3SiIGBmR3SOvr7k7AdIHP0YxgYnNuIdxvILlCXkxS7QIUtyB5Qd5RbFL9akLyQCmX3r8OW6+DKiCB59FYkSK1NBX5zQfEK0vP+LkIM34nphAAoLX59jdo1BrkDFE6wdEbvtIQN0CPPwNxJr3RMTcDAsBAAAAD//2L8//9/AwMDA5VnQcgAoAjCNh4Kqymp2TqBXTyFbhfscFZKIgNmNqXuhRUkpJgDKxywdTNhs+fU6trA3IcchrBjBgfzWk5Y+JAaFuTqo8S8gUxLuNxCizyDDuiZjskFDAyOAAAAAP//GjyF5ygYBaNgFAwVwMDgCAAAAP//Gj2SbhSMglEwCkgFDAwMAAAAAP//Gi08R8EoGAWjgFTAwMAAAAAA//8aLTxHwSgYBaOAVMDAwAAAAAD//xotPEfBKBgFo4BUwMDAAAAAAP//Gi08R8EoGAWjgFTAwMAAAAAA//8aLTxHwSgYBaOAVMDAwAAAAAD//xotPEfBKBgFo4BUwMDAAAAAAP//Gi08R8EoGAWjgFTAwMAAAAAA//8aLTxHwSgYBaOAVMDAwAAAAAD//wIVnhdGA24UjIJRMApIAAwMDAAAAAD//wJtz1RgYGC4Pxpuo2AUjIJRQBT4yMDAIAAAAAD//wK1PB8wMDAcHA2zUTAKRsEoIApsYGBgYAAAAAD//wK1PEG0ArT7zj8adqNgFIyCUYATgFqdCgwMDB8AAAAA//+CTRg9gJ7p+XE0zEbBKBgFowArAJWPoHLyAwMDAwMAAAD//0Kebb8AlRjtwo+CUTAKRgEqAJWLBvAJdgYGBgAAAAD//4J129GBAbQgFRgNwFEwCkbBCAagViZojBPUO0cABgYGAAAAAP//AwCvZCvnMod5sQAAAABJRU5ErkJggg==" alt="Consultanos" class="w-6/12 md:w-[200px] mt-3 hover:scale-105 hover:shadow-lg hover:shadow-[#ff952c] duration-300"></a></div>
        </div>

        <div class="bg-[#ff952c] text-white pt-0 px-4 pb-16 text-center"><svg xmlns="http://www.w3.org/2000/svg" class="relative top-[-5px] m-auto" width="30" viewBox="0 0 32 32">
                <path fill="#672381" d="M29                <script>
                    // Scroll solo al hacer clic en el botón Buscar
                    document.addEventListener('DOMContentLoaded', function () {
                        const btn = document.querySelector('[wire\\:click="buscarCursos"]');
                        if (btn) {
                            btn.addEventListener('click', function () {
                                setTimeout(() => {
                                    const results = document.getElementById('resultados');
                                    if (results) {
                                        results.scrollIntoView({ behavior: 'smooth' });
                                    }
                                }, 400); // Espera a que Livewire actualice el DOM
                            });
                        }
                    });
                
                    // Scroll solo al paginar (detecta clicks en los links del paginador)
                    document.addEventListener('click', function (e) {
                        if (e.target.closest('.pagination a, [wire\\:click^="gotoPage"]')) {
                            setTimeout(() => {
                                const results = document.getElementById('resultados');
                                if (results) {
                                    results.scrollIntoView({ behavior: 'smooth' });
                                }
                            }, 400);
                        }
                    });
                </script>.02 3c.569 0 .978.477.98 1c0 .163-.039.33-.125.489l-13.02 23.986c-.186.344-.52.525-.855.525s-.67-.181-.856-.525L2.124 4.49A1 1 0 0 1 2 4c.002-.523.411-1 .98-1z"></path>
            </svg>
            <h2 class="text-3xl mt-8 font-bold mb-6 italic">¡Elegí la carrera, y a estudiar!</h2>
            <div class="flex flex-col md:flex-row justify-center mb-8 md:gap-x-6">
                <div class="flex-1 m-2 text-left md:max-w-xs"><label class="block mb-1 text-xl font-semibold ml-2">Área de estudios</label>
                    <select wire:model="categoria" class="w-full bg-white text-purple-600 p-3 font-semibold rounded-lg shadow">
                        <option value="" selected>Todas</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->denominacion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex-1 m-2 text-left md:max-w-xs"><label class="block mb-1 text-lg font-semibold ml-2">Grado de Formación</label>
                
                <select wire:model="tipo" class="w-full bg-white text-purple-600 p-3 font-semibold rounded-lg shadow">
                        <option value="" selected>Todos</option>
                        @foreach($tipos as $tipo)
                        <option value="{{$tipo}}">{{Str::ucfirst($tipo)}}</option>
                        @endforeach
                    </select></div>
            </div>
            <p class="md:text-2xl mb-6 font-bold italic">Buscá en todos nuestros contenidos, buscá la Sede más cercana a vos.</p>
            <div class="flex flex-col lg:flex-row justify-center md:gap-x-6 gap-y-4">
                
                <div class="flex-1 m-2 mt-1 text-right md:max-w-lg"><label class="block mb-1 text-lg font-semibold ml-2">Instituciones Educativas</label>
                    <select wire:model="institucion" class="w-full p-3 rounded-lg text-lg text-purple-600 font-semibold bg-white border border-gray-300">
                        <option value="" selected>Todas</option>
                        @foreach($institutions as $institution)
                        <option value="{{$institution->id}}">{{$institution->denominacion}}</option>
                        @endforeach
                    </select>
                </div>
            
            <div class="flex-1 relative m-2 mt-1 md:max-w-lg text-left"><label class="block mb-1 text-lg font-semibold ml-2">Palabras clave</label>
                    <div class="relative">
                        <input wire:model="buscar" type="text" placeholder="Buscar por palabras..." class="w-full p-3 pr-12 rounded-lg text-lg text-purple-600 font-semibold placeholder:text-purple-600 border border-gray-300">
                    </div>
                </div>
            </div>
            <div class="flex justify-center my-6">
                <button wire:click="buscarCursos" class="bg-purple-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-purple-700 transition flex items-center gap-2">
                    Buscar contenido educativo en Red Gesta
                    <svg style="display: inline-block;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m19.485 20.154l-6.262-6.262q-.75.639-1.725.989t-1.96.35q-2.402 0-4.066-1.663T3.808 9.503T5.47 5.436t4.064-1.667t4.068 1.664T15.268 9.5q0 1.042-.369 2.017t-.97 1.668l6.262 6.261zM9.539 14.23q1.99 0 3.36-1.37t1.37-3.361t-1.37-3.36t-3.36-1.37t-3.361 1.37t-1.37 3.36t1.37 3.36t3.36 1.37"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <section class="results bg-[#f88920]" id="resultados">
        @if($cursos->count() > 0)
        <div class="max-w-5xl mx-auto px-4 p-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($cursos as $curso)
                    <a class="bg-white rounded-xl shadow p-4 flex gap-4 items-center border" href="/curso/{{ $curso->id }}" title="Ver curso: {{ $curso->denominacion }}">
                        <img src="{{ $curso->imagen ?? '/imgs/default-curso.png' }}" alt="Imagen del curso" class="w-24 h-24 object-cover rounded-lg border">
                        <div>
                            <strong class="block text-lg text-purple-700">{{ $curso->denominacion }}</strong>
                            <div class="text-gray-600 mb-2">{{ $curso->descripcion }}</div>
                            <div class="text-sm text-gray-500">
                                {{ optional($institutions->find($curso->institucion))->denominacion ?? 'Institución desconocida' }}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-12 flex justify-center">
                {{ $cursos->links() }}
            </div>
        </div>
        @else
        <div class="max-w-5xl mx-auto px-4 p-5 text-center">
            <h2 class="text-2xl font-bold text-white mb-4">No se encontraron cursos</h2>
            <p class="text-gray-200">Intenta ajustar tus criterios de búsqueda o explora otras categorías.</p>

        @endif

    </section>
    
</div> 
<script>
    // Scroll solo al hacer clic en el botón Buscar
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.querySelector('[wire\\:click="buscarCursos"]');
        if (btn) {
            btn.addEventListener('click', function () {
                setTimeout(() => {
                    const results = document.getElementById('resultados');
                    if (results) {
                        results.scrollIntoView({ behavior: 'smooth' });
                    }
                }, 400); // Espera a que Livewire actualice el DOM
            });
        }
    });

    // Scroll solo al paginar (detecta clicks en los links del paginador)
    document.addEventListener('click', function (e) {
        if (e.target.closest('.pagination a, [wire\\:click^="gotoPage"]')) {
            setTimeout(() => {
                const results = document.getElementById('resultados');
                if (results) {
                    results.scrollIntoView({ behavior: 'smooth' });
                }
            }, 400);
        }
    });
</script>