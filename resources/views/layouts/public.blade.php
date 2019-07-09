<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nubie') }}</title>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    @include('components.navbar')
    
    <main id="root">
        @yield('content')
    </main>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
</body>

</html>
