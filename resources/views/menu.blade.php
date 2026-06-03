<!DOCTYPE html>
<html>
<head>
    @vite(['resources/css/app.css'])
</head>
<body class="kiosk-mode">

    <div class="w-full h-full flex items-center justify-center gap-10">

        <a href="{{ route('home') }}"
           class="px-10 py-6 bg-black text-white rounded-xl text-2xl">
            Guerra del Chaco
        </a>

        <a href="{{ route('vistaPrincipal') }}"
           class="px-10 py-6 bg-green-700 text-white rounded-xl text-2xl">
            Ecorregiones
        </a>

    </div>

</body>

</html>
