<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Chaco War')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="kiosk-mode bg-[#ffffff] text-[#1a1a1a] antialiased">
        <div class="flex h-full overflow-hidden">
                <div class="w-[50%] relative bg-contain bg-center bg-no-repeat"
                    style="background-image: url('{{ asset($bgImage) }}')">
                    @yield('map')
                </div>
            <div class="w-[50%] bg-white flex flex-col justify-between ">
                <div class="px-14 pt-16 pb-10 overflow-y-auto">
                    @yield('content')
                </div>
                <div class="px-14 pb-5 pt-5">
                    @include('layouts.partials.nav')
                </div>
            </div>
        </div>
    </body>
</html>

