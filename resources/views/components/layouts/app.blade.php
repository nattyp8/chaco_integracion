<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Chaco War')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-[#ffffff] text-[#1a1a1a] antialiased">

        <div class="flex h-screen overflow-hidden">
            <div class="w-[60%] relative bg-[#8e6060]">
                @yield('map')
            </div>
            <div class="w-[40%] bg-white flex flex-col justify-between border-l border-color: #e5e5e5;">
                <div class="px-14 pt-16 pb-10 overflow-y-auto">
                    @yield('content')
                </div>
                <div class="px-14 pb-12 pt-10">
                    @include('layouts.partials.nav')
                </div>
            </div>

        </div>

    </body>
</html>
