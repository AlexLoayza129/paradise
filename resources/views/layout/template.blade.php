<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;800&display=swap" rel="stylesheet">
    <style>
        body{background-color: #f5f5f5;}
    </style>
    <title>@yield('title')</title>
</head>
<body class="relative pb-8" style="font-family: 'Poppins', sans-serif;">
    <div id="app" style="min-height: 100vh;">
        @include('layout.base-layout')
        <div class="container mx-auto bg-white p-4 mt-28">
            @yield('content')
        </div>
        @include('layout.footer')    
    </div>
    @routes
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>