@extends('ecorregiones_chaco.layouts.app')

@section('content')

        <div class="flex gap-4 h-screen">


            <!-- MAPA - lado izquierdo -->
            <div id="map" class="w-1/2 mt-auto mb-auto h-auto relative">
                <img id="img" src="{{ asset('images_ecorregiones/zoom_1.svg') }}" alt="">

                <div id="pulse-wrapper-vi">
                    <div id="pulse">
                        <span></span>
                        <span></span>
                    </div>
                </div>

            </div>


            <!-- PANEL INFO - lado derecho -->
            <div class="w-1/2 h-full p-6 lg:p-10 flex flex-col justify-center appear-content">
                <h1 class="text-2xl lg:text-3xl font-bold text-black">{{ __('app.titulo_vistaP') }}</h1>
                <hr class="w-32 border-black border-3 rounded-2xl mb-10 mt-10">

                <div class="text-sm lg:text-base space-y-4 text-gray-700 leading-relaxed">
                    <p>{{ __('app.contenido_vistaP') }}</p>
                </div>
            </div>

        </div>


        <!-- PANEL BOTONES - abajo -->
        <div class="fixed bottom-25 right-10 flex gap-4">

            <a href="{{ route('lang.switch', 'es') }}" class="px-4 py-2 bg-white rounded-full text-black shadow hover:shadow-md transition
            {{ app()->getLocale() === 'es' ? 'font-bold underline' : '' }}">
                ES
            </a>

            <a href="{{ route('lang.switch', 'en') }}" class="px-4 py-2 bg-white rounded-full text-black shadow hover:shadow-md transition
            {{ app()->getLocale() === 'en' ? 'font-bold underline' : '' }}">
                EN
            </a>

        </div>

        <div class="fixed bottom-8 right-8 flex flex-col items-end gap-6">
            <div class="fixed bottom-4 right-4 lg:bottom-8 lg:right-8 flex gap-2 lg:gap-4">

                <a href="/ecorregiones">
                    <img id="btnEco" src="{{ asset('images_ecorregiones/btn_eco.png') }}" class="w-16 lg:w-24 cursor-pointer" alt="Ecorregiones">
                </a>

                <a href="/precipitaciones">
                    <img id="btnPrec" src="{{ asset('images_ecorregiones/btn_ll.png') }}" class="w-16 lg:w-24 cursor-pointer" alt="Lluvias">
                </a>

                <a href="/zonasclimaticas">
                    <img id="btnClim" src="{{ asset('images_ecorregiones/btn_zc.png') }}" class="w-16 lg:w-24 cursor-pointer" alt="Zonas Climáticas">
                </a>

            </div>
        </div>




        <script>
            document.addEventListener('DOMContentLoaded', () => {

                const img = document.getElementById('img');

                function cambiarImagen(nuevaRuta) {

                    img.style.transition = 'all 0.5s ease';
                    img.style.opacity = '0';
                    img.style.transform = 'scale(1.05)';

                    setTimeout(() => {

                        img.src = nuevaRuta;

                        img.style.opacity = '1';
                        img.style.transform = 'scale(1)';

                    }, 500);
                }

               let estado = 1;

            img.addEventListener('click', function() {

                    if (estado === 1) {

                        cambiarImagen('images_ecorregiones/zoom_2_dep.svg');
                        estado = 2;

                        setTimeout(() => {
                            cambiarImagen('images_ecorregiones/zoom_3_dep.svg');

                            setTimeout(() => {
                                window.location = '/ecorregiones';
                            }, 1000);

                        }, 1300);

                    }
                });

            });
        </script>

@endsection

