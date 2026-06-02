 <x-layouts::app.app>
    <div class="flex h-screen">
        <!-- MAPA -->
        <section class="w-1/2 flex items-center justify-center p-4">
            <img src="{{ asset('images_ecorregiones/mapa_climas.png')}}" alt="{{ 'imgtitle'}}" class="max-w-full max-h-[80vh] object-contain appear-zoom">
        </section>

        <!-- CONTENIDO -->
        <section class="w-1/2 flex flex-col justify-center p-6 lg:p-10 ">
            <h1 class="text-2xl lg:text-4xl font-bold text-black">{{ __('app.precipitaciones_titulo')}}</h1>
            <hr class="w-16 lg:w-20 border-black border-2 my-4">

            <div class="text-sm space-y-4 text-gray-700 leading-relaxed appear-content">

                    <p> {{ __('app.precipitaciones_desc') }}</p>

            </div>
        </section>
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
                <img id="btnEco" src="{{ asset('images_ecorregiones/btn_eco.png') }}" class="w-16 lg:w-24 cursor-pointer" alt="Ecorregiones">
            </a>

            <a href="/precipitaciones">
                <img id="btnPrec" src="{{ asset('images_ecorregiones/btn_ll.png') }}" class="w-16 lg:w-24 cursor-pointer" alt="Lluvias">
            </a>

            <a href="/zonasclimaticas">
                <img id="btnClim" src="{{ asset('images_ecorregiones/btn_zc.png') }}" class="w-16 lg:w-24 cursor-pointer" alt="Zonas Climáticas">
            </a>

        </div>
</x-layouts::app.app>
