 <x-layouts::app.app>
    <div class="flex h-screen">
        <!-- MAPA -->
        <section class="w-1/2 flex items-center justify-center p-4">
            <div class="w-full max-h-[80vh] flex items-center justify-center">
                {!! file_get_contents(public_path('images_ecorregiones/mapa_lluvias.svg')) !!}
            </div>
        </section>

        <!-- CONTENIDO DINÁMICO -->
        <section class="w-1/2 flex flex-col justify-center p-6 lg:p-10">
            <h1 class="text-2xl lg:text-4xl font-bold text-black">{{ $region['title'] }}</h1>
            <hr class="w-16 lg:w-20 border-black border-2 my-6">

            <div class="text-sm lg:text-base space-y-4 text-gray-700 leading-relaxed appear-content">

                    <p>{{ $region['description'] }}</p>


            </div>
        </section>
    </div>

    <div id="pulse-wrapper">
        <div id="pulse">
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- BOTONES DE NAVEGACIÓN -->
    <div class="fixed bottom-8 right-8 flex flex-col items-end gap-6">
        <div class="flex gap-4">
            <a href="{{ route('vistaPrincipal') }}" class="px-4 py-2 bg-white rounded-full text-black shadow hover:shadow-md transition">
                {{ __('app.home') }}
                <hr class="w-8 lg:w-10 border-black border ">
            </a>


            <a href="/lang/es" class="px-4 py-2 bg-white rounded-full text-black shadow hover:shadow-md transition">ES</a>


            <a href="/lang/en" class="px-4 py-2 bg-white rounded-full text-black shadow hover:shadow-md transition">EN</a>
        </div>
        <div class="flex gap-4">

            <a href="/ecorregiones">
                <img id="btnEco" src="{{ asset('images_ecorregiones/btn_eco.png') }}" class="w-16 lg:w-24 cursor-pointer" alt="Ecorregiones"> hola
            </a>

            <a href="/precipitaciones">
                <img id="btnPrec" src="{{ asset('images_ecorregiones/btn_ll.png') }}" class="w-16 lg:w-24 cursor-pointer" alt="Lluvias">
            </a>

            <a href="/zonasclimaticas">
                <img id="btnClim" src="{{ asset('images_ecorregiones/btn_zc.png') }}" class="w-16 lg:w-24 cursor-pointer" alt="Zonas Climáticas">
            </a>

        </div>

    @push('scripts')
    <script>
        document.getElementById('zona_subhumedo').addEventListener('click', function() {
            window.location = "{{ route('contRegV', 'VD') }}";
        });

        document.getElementById('zona_subseco').addEventListener('click', function() {
            window.location = "{{ route('contRegV', 'AM') }}";
        });

        document.getElementById('zona_semiarido').addEventListener('click', function() {
            window.location = "{{ route('contRegV', 'RS') }}";
        });

    </script>

    @endpush


</x-layouts::app.app>
