<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- CSS --}}
    @vite('resources/css/app.css', 'resources/js/app.js')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    

    {{-- SCRIPTS --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.7/dist/cdn.min.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <title>@yield('title')</title>
</head>
<body>
    <main>
        <x-flash-message />
        {{ $slot }}
    </main>
</body>
</html>