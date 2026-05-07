<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Guerra del Chaco</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black overflow-hidden">
    <div id="intro"
        class="fixed mb-90 inset-0 flex items-center justify-center bg-black">
        <img
        src="{{ asset('images/img_inicio.svg')}}"
        alt="La guerra del Chaco"
        class="w-120 object-contain">

            <div id="preloader">
                <div id="loader" style="top:550px">
                </div>
            </div>

    </div>
</body>
</html>
