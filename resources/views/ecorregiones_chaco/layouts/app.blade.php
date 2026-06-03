<!DOCTYPE html>
<html lang="en">
<head>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
    @livewireStyles

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gran Chaco Paraguayo</title>
</head>
<body class="min-h-screen bg-zinc-50 md:bg-opacity-20">


    <main>
         @yield('content')
    </main>


    @livewireScripts
    @fluxScripts

    @stack('scripts')

    <script>
        let timer;

        function resetTimer() {
            clearTimeout(timer);

            timer = setTimeout(() => {

                const isHome = @json(request()->routeIs('home'));

                if (!isHome) {
                    window.location.href = "{{ route('home') }}";
                }

            }, 30000);
        }

        document.addEventListener('mousemove', resetTimer);
        document.addEventListener('click', resetTimer);
        document.addEventListener('keypress', resetTimer);
        document.addEventListener('touchstart', resetTimer);

        resetTimer();

        const regiones = document.querySelectorAll('path');

        regiones.forEach(region => {

            region.addEventListener('click', function() {

                regiones.forEach(r => {
                    r.style.opacity = '0.4';
                });

                this.style.opacity = '1';
                this.style.fill = '#145214';

            });

        });

    </script>
</body>
</html>
