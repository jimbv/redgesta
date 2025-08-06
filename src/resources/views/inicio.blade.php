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
    @include('yields.navigator')
    <livewire:cursos-buscador />
    <section class="formal">
        <div class="bg-white pt-12 sm:pb-4 pb-20">
            <div class="text-center mb-8 w-fit mx-auto">
                <h2 class="md:text-5xl text-3xl font-bold text-[#6f108b] italic"> Te acompañamos </h2>
            </div>
            <div class="flex flex-wrap justify-center gap-16 gap-y-8 items-center mt-12">
                <div class="md:w-[330px] w-10/12 bg-white border-gray-200 text-center md:grid md:grid-rows-3">
                    <img class="m-auto h-36" src="/imgs/clasevivo.png" alt="Clases en Vivo">
                    <div class="p-5 pb-2 text-center"><a href="#">
                            <h5 class="mb-2 text-2xl font-bold italic text-[#6f108b]"> Clases en video </h5>
                        </a>
                        <p class="mb-3 text-lg text-gray-900"> Podés ver las clases una y otra vez </p>
                    </div><a href="#" class="md:self-start"><img src="/assets/boton1-C1MY1lKZ.png" class="m-auto h-10 hover:scale-105 hover:shadow-lg hover:shadow-[#ff952c] duration-300" alt=""></a>
                </div>
                <div class="md:w-[330px] w-10/12 bg-white border-gray-200 text-center md:grid md:grid-rows-3">
                    <img class="m-auto h-36" src="/imgs/interaccion.png" alt="">
                    <div class="p-5 pb-2 text-center"><a href="#">
                            <h5 class="mb-2 text-2xl font-bold italic text-[#6f108b]"> Interacción con docentes </h5>
                        </a>
                        <p class="mb-3 text-lg text-gray-900"> Te acompañamos con un docente que te guía </p>
                    </div><a href="#" class="md:self-start h-12"><img src="/assets/boton2-Cv86oW1D.png" class="m-auto w-60 hover:scale-105 hover:shadow-lg hover:shadow-[#ff952c] duration-300" alt=""></a>
                </div>
                <div class="md:w-[330px] w-10/12 bg-white border-gray-200 text-center md:grid md:grid-rows-3">
                    <img class="m-auto h-36" src="/imgs/soporte.png" alt="">
                    <div class="p-5 pb-2 text-center"><a href="#">
                            <h5 class="mb-2 text-2xl font-bold italic text-[#6f108b]"> Soporte en todo el país </h5>
                        </a>
                        <p class="mb-3 text-lg text-gray-900"> Estamos en todo el país, mirá donde nos encontrás </p>
                    </div>
                    <a href="/contacto">
                        <button class="md:self-start">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPgAAAA/CAYAAADNPAUHAAAACXBIWXMAAAsSAAALEgHS3X78AAANH0lEQVR4nGL8//8/AwaYpqvAwMCggCkxCkbBKBik4AJD1uUPKG5jYGAAAAAA//9CzeDTdBMYGBgaGBgY5EdjcRSMgiEHHoLzb9blBWCXMzAwAAAAAP//gmTwaboCDAwMGxgYGOxH43QUjIIhDw4yMDAEMGRd/gAAAAD//2KCemXBaOYeBaNg2ABQXp7AwMDAAAAAAP//Yvw/VceBgYFh/2jcjoJRMMwAA4MjAAAA//9iAlflo2AUjILhBxgYAgAAAAD//wJlcIPRqB0Fo2AYAgYGAwAAAAD//2IajddRMAqGKWBgYAAAAAD//xrN4KNgFAxXwMDAAAAAAP//Gs3go2AUDFfAwMAAAAAA//8azeCjYBQMV8DAwAAAAAD//xrN4KNgFAxXwMDAAAAAAP//Gs3go2AUDFfAwMAAAAAA//8azeCjYBQMV8DAwAAAAAD//xrN4KNgFAxXwMDAAAAAAP//Gs3go2AUDFfAwMAAAAAA//8azeCjYBQMV8DAwAAAAAD//2IZjdxRQDOg7MbAoOLOwMDOx8Dw6QkDw9XVDAyvr42GN70AAwMDAAAA//8auhlcxgJC88kwMPz8hMCjCWjwAO1QRDwxQDP86nBIZh8FtAcMDAwAAAAA//8aOhkcVAtohTAwyFqiJhps4O4uBoY7OyH0KBg8ABSHRskMDAcaRyOFHoCBgQEAAAD//xoaGdwwCZIwQAmEGACqKUAYVJuDEtNorT54AKjFhQvACgBRLUgt//j4aCFNCWBgYAAAAAD//xrcGRwU4e69hGtsXACUUPxmQzL5aEIZHABfXKLHNajFtsRztElPLmBgYAAAAAD//xq8o+igzA3KnORmbmRzHOrx1xyjYHAAbHENaomNAvIAAwMDAAAA//8avBkcVJqDamBqAFjTbxSMgpEEGBgYAAAAAP//GpxNdFCfG1/NDepTg6ZcQM1u0Mg5AzQTg/Sgj9zCwGgNPgpGGmBgYAAAAAD//xp8GZxQbXu8n4Hh/DxMcVBGB2V4EAb13SwLUQflQAM2xABQk1BMG9J6AGGYGU9OQAqWV1eJ68+DzAGN+IMKFpDd19YgCiMGaIEDKoxAdsAKJJD5IAyaAQDZRwyA6QfZxQBt5oLMgE0dwtyLqx+LPLAFUg9zKzH+g81xwwpccvrKIPfia6nB/IUM8PkHFK6wOAS5DT0OiQkTZD/iikOQmaA0BnI/SB4Wb9jS5kABBgYGAAAAAP//Ap2qemBQHZkMqr1BAYcN4Mrc2AAockDNfAZoxO4sRs1g6AAUUcT21UEJA+QWfBk96zIqH5QAQHPAhPwIAyB/guzABUAJF5bAiAEg887NxQwDbOMcm1LxFzAg9SB9uPyHz2wG8AUbEBrkh9CVxLkfGYDCHzT4hgxA8QYqqECFO7EAlGFBYYwrXWCLQ1DYgOwC+Q3brA6heKMnYGA4CAAAAP//zNlBDsAgCARAftAX9P/fbOZgYgy1lJOcFRLZZdU9T8GpQhYA92c6It+wyL5sMkRBumposOEBIFVPF5iB77prtawBoCz/cAeqtmFMz56VhBkB5d8RPFPczn9J9wN1HcKd8xD6YS/S7ob/XIdwuHm91ZLzFIJHxAMAAP//GlyDbKCIw5VQQLUPqQCUAamduZEBKDJBtT6xAJQwSLELZD56JoBNHZKamBkYULsDgwGQO/2FnhlBcUBOeMDCBNbSIwbAujO4ALnuoAVgYGAAAAAA///MmjsOACEIRKe02/sfc7stN6+YhBhR7KCyMcgon0F6ZfCsPOZCq5z0RojGmcMRGND5vdJ4cq6IE1YHMub9tmnndASFaDtnXuFE1nCfwNwT/sj54qPr1GwEM6qyEw+Pgo1wXYttnYU3Q4CHb7M2Hiusrb8yEHXCr9OfvaQfAAD//8yazQoAIAiD9/5PHd9hIDEhD4FBVymbP7PtCvDukX8p0RIPBgx0C4kOdIo67EyENARjGtgk/nj/A6cKga16XidENnehwmEH8G0T/NR29ua8epgHpGWuXCu9KR6+SH6GGk5wVhMIQe/ksag9l6QDAAD//9yaSwoAIAhEvf+p4y0GYkixRUG5lLCPo+nUG19VTwR4dhNCxmWAAiAEiZd0Ym47wUNP7Sw1YEEvRtYFvda0YpUrwTZ7IjnNz4q/iM5Oryb4p+qpGYuvPFHucAjYZo4Zl2CjWwXckogYAAAA//8aufvBQdMo6ACU8QjVFqBMgm0aiZiMB4p8fFNQoKkmYsxAB6AaCTTIBKJxNSFhhdNwBKAwBY2qgzIdMQNmlGZCUKsImxmDbc8DAwMDAAAA//8aGjU4tVa0ETKT2LlykDr0Zh4xfVtCCY+YDAiyG9u4AaiWh/UvQeaACipQ8xFEj4S13OjjNMj9evTCl9L0NFT2NTAwMAAAAAD//xpcGRzf4gVqA2yRTGxfD1tJTY3RaWKazyA3gmosfPO9oPACycPUgBIkrlpnOAHYSkZarl8HxdFQKTAZGBgAAAAA//8aXE10XAkQlGCpPb2DbbCK2P7pQEcwKQt+GKDjDaAFJaQsAhlKALYxCYRpvTllKBWSDAwMAAAAAP//Gnw1OAhjq7HRp4uIAaCmLGiKC9sySlBEodfixA6S4JqWoRcA2QXK5CB/gUb1cQ3OoQPQCDIxC3+GGgBlbFxxAuuqgADM36ABOVp0+wYbYGBgAAAAAP//Gnx9cFBzElsfE1Qyg2ogYtZJM0AzIWxKC2Qe+ug1tgwJW8dNCGBrTQxEpgEVWrCVbrC186DBQ3wZHlRQElp9B+qzDrI11TgBbDUaOkCfikQGw20mARdgYGAAAAAA//8afKPo+EaScc1hogNsSxfR57yxDajhW4IIAyB5kDp0QOwAHTUANjfCRuhBmRc2oowtIRNT0xNSg20GYqAAtqXNsDlvXBl5pOwsZGBgAAAAAP//GnwZHFQr4as9QJkcV18LFHGg2hrbumR0PraRUJB+QptAQPLYEggtVtphA6ACLmY74TEJ2EIXdIAeDtjGE2DhiA2A/E/PQxiw1c7IfsBW2OErbIntzgwHwMDAAAAAAP//1Jw7CgAgDEN7/1PLAwOlpIKDol1cFDL0Z01885mMie+KvpifhOTEWRborDo7ju2m0Wr5wJCTAE7d8ZBFET1t+p0m5r0T/OB0QdpROOtesLuuiEBGGCNaKEFBtbzNZadbkrRTCZhVohlXpTnjisQu7/x3i4gBAAD//xqcGRy2OomYHULEJjhsm1VAYrhWNRGbEGBupQdAr3lgU2GwgbOPjyHisH44MbUbtjl9dPPpBUCFDXp8gvwMarGgA9jqPlwtEFDaARVOIHlQOIDGFbDF9XAGDAwMAAAAAP//GrwLXWDriUEZjdImFSgDYmuuwpY1krPVkAFpySK2RIZrNoASAMvI2Eb/iRkVxraSDlQ7YstY+ACodiR3Bx4+AMqQpLYQQGM22Aoh5FYeOgD5mZhuBi3ikJ6AgYEBAAAA//8a3EtVYYcIkDuiC8vA+EbeYQUJqXPbMLNxNc1xZXp8ANegELI4qLAiZx4elIlB7sUGSDlaGqQWNEJNjBuwqcE3VkHM9l4GpJ1+MDaxLSjYunxitx6TE4eDCTAwMAAAAAD//2Ju8BZLYGBgUBi0Lvz7ExKZNzczMPz9xcAgpMzAwMKOXw8o0k9PY2A40snA8P4uYTu+vYaYD0oAoH4nvtocFMGgBHKwCX9kf33NwKDggHAryOwjHRC78LmDWwy1NgYleuQCCtmtoDl+blH8fkMOC1BYYgOw465A5uHb0be3CjEu8fw8pNkLCytQWFxaiqrn3V1IGMDUgOwBuQVfnBByBygtbMtB9QvIbSC7YMc0YQOgMAS5/8V5SBjC4gcGQO4HhSsyICcOBxNgYHgIAAAA//8afEc2EQNAkQ9qOqE3n0ARDVssQ6n56IN2sGuRSB1Mg7mRVDch7yDDB5DPHYPZBVtOCTubjVT3ovff8Q0iEuM/kBrY2W20cgcMoKcN5NoeHSAPROILa3LjcKABA8NBAAAAAP//GpoZfBSMglFAGDAwHAQAAAD//xq9PngUjILhChgYGAAAAAD//xrN4KNgFAxXwMDAAAAAAP//Gs3go2AUDFfAwMAAAAAA//8azeCjYBQMV8DAwAAAAAD//xrN4KNgFAxXwMDAAAAAAP//Gs3go2AUDFfAwMAAAAAA//8azeCjYBQMV8DAwAAAAAD//xrN4KNgFAxXwMDAAAAAAP//Gs3go2AUDFfAwMAAAAAA//8azeCjYBQMV8DAwAAAAAD//xrN4KNgFAxXwMDAAAAAAP//AmXwC6MRPApGwTAEDAwXAAAAAP//AmXwCaNxOwpGwTAEDAwTAAAAAP//YmLIuvyAgYFh4mj8joJRMKzARIasyw8AAAAA//9i/P//P8RX03QXMDAwxI/G8SgYBUMeLGTIupzAwMDAAAAAAP//QgyyQQQcGRgYNo7G7ygYBUMSgPKuIyxzMzAwMAAAAAD//wMA1d/lXFUxTdAAAAAASUVORK5CYII=" class="m-auto h-10 hover:scale-105 hover:shadow-lg hover:shadow-[#ff952c] duration-300" alt="">
                        </button>
                    </a>

                </div>
            </div>
            <!---->
        </div>

        <div data-v-6b0359bd="" class="bg-white pb-16">
            <h2 data-v-6b0359bd="" class="md:text-5xl text-3xl text-center font-bold text-[#6f108b] italic">28 Instituciones educativas</h2>
            <div class="container mx-auto py-6">
    <div class="flex flex-wrap justify-center">
        @foreach($instituciones as $institucion)
        @if(isset($institucion->url_logo) && $institucion->url_logo)
            <div class="w-1/7 p-2 text-center">
                <img src="/{{$institucion->url_logo}}" alt="Logo {{ $institucion->nombre }}" class="mx-auto h-24 object-contain">
                <p class="mt-2 text-sm">{{ $institucion->nombre }}</p>
            </div>
            @endif
        @endforeach
    </div>
</div>

        </div>
    </section>
    <section class="testimonial">
        <div class="flex flex-wrap justify-center items-end gap-x-12 gap-y-36 pt-32">
            <div class="relative bg-white rounded-t-[50px] rounded-b-xl p-6 max-w-[350px] text-center flex flex-col justify-between h-[450px] mb-8">
                <div class="absolute inset-x-0 -top-20 flex justify-center pb-5"><img src="/imagenes/testimonios/Juli.jpg" alt="Foto de Juli" class="w-48 h-48 rounded-full border-4 border-white object-cover ring-4 ring-[#eda062]"></div>
                <div class="pt-32 flex flex-col items-center">
                    <h2 class="text-xl font-bold text-purple-700 italic mb-1">Juli</h2>
                    <p class="text-sm text-gray-600 mb-2 text-center"><span class="text-base font-bold">Universidad Belgrano</span><br><span class="font-semibold">Tecnicatura en Marketing</span></p>
                    <p class="text-gray-700 text-sm mb-4 text-center"> “Estudio Marketing y la ventaja es que haces absolutamente todo a distancia, rendís los exámenes, rendís los finales, tenés clases virtuales… Averigüe en todas las carreras de marketing que se dictaban en todas las universidades y elegí esta tecnicatura, la recomiendo". </p>
                </div>
                <div class="text-purple-700 mt-4"><a href="https://www.instagram.com/reel/C76tROmvTr3/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg></a></div>
            </div>
            <div class="relative bg-white rounded-t-[50px] rounded-b-xl p-6 max-w-[350px] text-center flex flex-col justify-between h-[450px] mb-8">
                <div class="absolute inset-x-0 -top-20 flex justify-center pb-5"><img src="/imagenes/testimonios/Mariana.jpg" alt="Foto de Mariana Alejandra Ros" class="w-48 h-48 rounded-full border-4 border-white object-cover ring-4 ring-[#eda062]"></div>
                <div class="pt-32 flex flex-col items-center">
                    <h2 class="text-xl font-bold text-purple-700 italic mb-1">Mariana Alejandra Ros</h2>
                    <p class="text-sm text-gray-600 mb-2 text-center"><span class="text-base font-bold">ISE</span><br><span class="font-semibold">Capacitación en peluquería y estética canina</span></p>
                    <p class="text-gray-700 text-sm mb-4 text-center"> “Los CURSOS de ISE han sido una experiencia muy positiva para mí. Me encantaron los de peluquería canina, los de contabilidad básica y autismo. La posibilidad de acceder al material en línea y resolver dudas de forma virtual me permitió acceder a mi propio ritmo". </p>
                </div>
                <div class="text-purple-700 mt-4"><a href="https://www.instagram.com/reel/DAtCgTNo5Q0/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg></a></div>
            </div>
            <div class="relative bg-white rounded-t-[50px] rounded-b-xl p-6 max-w-[350px] text-center flex flex-col justify-between h-[450px] mb-8">
                <div class="absolute inset-x-0 -top-20 flex justify-center pb-5"><img src="/imagenes/testimonios/Leonel.jpg" alt="Foto de Leonel Mateucci" class="w-48 h-48 rounded-full border-4 border-white object-cover ring-4 ring-[#eda062]"></div>
                <div class="pt-32 flex flex-col items-center">
                    <h2 class="text-xl font-bold text-purple-700 italic mb-1">Leonel Mateucci</h2>
                    <p class="text-sm text-gray-600 mb-2 text-center"><span class="text-base font-bold">ISE</span><br><span class="font-semibold">Capacitación en química Industrial</span></p>
                    <p class="text-gray-700 text-sm mb-4 text-center"> “Lo recomiendo muchísimo ya que me ayudó a ampliar mis conocimientos para la formación académica y lo que está muy bueno también es que yo puedo administrar mis tiempos. Además, los materiales de estudio son muy completos y las clases virtuales me permitieron aprender de manera flexible". </p>
                </div>
                <div class="text-purple-700 mt-4"><a href="https://www.instagram.com/reel/C_dPLRoMsv3/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg></a></div>
            </div>
        </div>
    </section>
    <footer>
        <div class="bg-orange-500 py-10 text-white">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 px-6 md:px-0">
                <div class="flex justify-end md:justify-end"><img src="/imgs/logbla.svg" alt="Logo" class="w-1/2 md:w-1/2"></div>
                <div class="space-y-6">
                    <div class="flex items-center gap-x-4">
                        <div class="bg-white p-3 rounded-full"><img src="/imgs/phone.svg" alt="phone" class="w-6 h-6"></div><span class="text-lg font-semibold">+54 9 3534 611855</span>
                    </div>
                    <div class="flex items-center gap-x-4">
                        <div class="bg-white p-3 rounded-full"><img src="/imgs/mail.svg" alt="mail" class="w-6 h-6"></div><span class="text-lg font-semibold">info@redgesta.com</span>
                    </div>
                    <div class="flex items-center gap-x-4">
                        <div class="bg-white p-3 rounded-full"><img src="/imgs/location.svg" alt="location" class="w-6 h-6"></div><span class="text-lg font-semibold"> Lisandro de la Torre 86, Villa María, Córdoba, Argentina </span>
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="relative flex items-center gap-x-4 cursor-pointer group">
                        <div class="bg-white p-3 rounded-full"><img src="/imgs/whatsappb.svg" alt="WhatsApp" class="w-6 h-6"></div><span class="text-lg font-semibold">¡Escríbenos!</span>
                        <div class="absolute left-16 -top-10 bg-gray-700 text-white text-sm rounded-md px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300"> Clic para redireccionarte al chat </div>
                    </div>
                    <div class="flex items-center gap-x-4">
                        <div class="bg-white p-3 rounded-full"><img src="/imgs/instagram.svg" alt="instagram" class="w-6 h-6"></div><span class="text-lg font-semibold">redgestaok</span>
                    </div>
                    <div class="flex items-center gap-x-4">
                        <div class="bg-white p-3 rounded-full"><img src="/imgs/facebook.svg" alt="facebook" class="w-6 h-6"></div><span class="text-lg font-semibold">redgestaok</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>