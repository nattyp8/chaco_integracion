<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}

    @vite(['resources/css/home.css', 'resources/js/app.js'])
</head>

<body>
    {{ $slot }}
    @stack('scripts')
</body>
</html>
