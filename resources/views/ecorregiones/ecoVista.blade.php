 <x-layouts::app.app>
    <div class="flex h-screen">
        <!-- MAPA -->
        <section class="w-1/2 flex items-center justify-center p-4">
            <div class="w-full max-h-[80vh] flex items-center justify-center appear-zoom">
                {!! file_get_contents(public_path('mapa_ecorregiones-01.svg')) !!}
            </div>
        </section>

        <!-- CONTENIDO DINÁMICO -->
        <section class="w-1/2 flex flex-col justify-center p-6 lg:p-10 appear-content">
            <h1 class="text-2xl lg:text-4xl font-bold text-black">{{ __('app.ecoregions') }}</h1>
            <hr class="w-16 lg:w-20 border-black border-2 lg:my-6">

            <div class="text-sm lg:text-base space-y-4 text-gray-700 leading-relaxed">

                    <p>{{ '' }}</p>


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

            <a href="{{ route('lang.switch', 'es') }}" class="px-4 py-2 bg-white rounded-full text-black shadow hover:shadow-md transition
            {{ app()->getLocale() === 'es' ? 'font-bold underline' : '' }}">
                ES
            </a>

            <a href="{{ route('lang.switch', 'en') }}" class="px-4 py-2 bg-white rounded-full text-black shadow hover:shadow-md transition
            {{ app()->getLocale() === 'en' ? 'font-bold underline' : '' }}">
                EN
            </a>
        </div>
        <div class="flex gap-4">

            <a href="/ecorregiones">
                <img id="btnEco" src="{{ asset('btn_eco.png') }}" class="w-16 lg:w-24 cursor-pointer" alt="Ecorregiones">
            </a>

            <a href="/precipitaciones">
                <img id="btnPrec" src="{{ asset('btn_ll.png') }}" class="w-16 lg:w-24 cursor-pointer" alt="Lluvias">
            </a>

            <a href="/zonasclimaticas">
                <img id="btnClim" src="{{ asset('btn_zc.png') }}" class="w-16 lg:w-24 cursor-pointer" alt="Zonas Climáticas">
            </a>

        </div>

    @push('scripts')
    <script>
        document.getElementById('eco_humedo').addEventListener('click', function() {
            window.location = '/ecorregiones/CH';
        });

        document.getElementById('eco_seco').addEventListener('click', function() {
            window.location = '/ecorregiones/CS';
        });

        document.getElementById('eco_pantanal').addEventListener('click', function() {
            window.location = '/ecorregiones/PA';
        });

        document.getElementById('eco_cerrados').addEventListener('click', function() {
            window.location = '/ecorregiones/CE';
        });

        document.getElementById('eco_medanos').addEventListener('click', function() {
            window.location = '/ecorregiones/MD';
        });




    </script>

    @endpush
</x-layouts::app.app>
