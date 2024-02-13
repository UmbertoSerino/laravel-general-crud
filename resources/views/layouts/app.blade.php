<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/assets/img/images.png') }}" type="image/x-icon">
    <title>Pokemon
    </title>
    
    <!-- Includiamo gli assets con la direttiva vite -->
    @vite('resources/js/app.js')
    @yield('head-content')
</head>
<body>
    @include('partials.header')

    <main>
        @yield('main-content')
    </main>

    @include('partials.footer')

    @yield('script-content')
</body>
</html>