<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>@yield('title', 'Chaco War')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="kiosk-mode">
        <div class="flex h-full overflow-hidden">
                <div id="mapPanel"
                    class="w-1/2 relative bg-contain bg-center bg-no-repeat
                    transition-opacity duration-400 ease-in-out opacity-100"
                    style="background-image: url('{{ asset($bgImage) }}')">
                    @yield('map')
                </div>
            <div
                class="w-1/2 flex flex-col h-full">
                <div id="pageContent"
                    class="flex-1 overflow-y-auto px-12 pt-15">
                    @yield('content')
                </div>
                <div id="navPanel"
                    class="px-14 pb-5 pt-3">
                    @include('layouts.partials.nav')
                </div>
            </div>
        </div>
        {{-- @stack('scripts') --}}
    </body>
</html>

