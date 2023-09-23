<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- <link rel="stylesheet" href="/css/app.css"> --}}
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        @notifyCss
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://kit.fontawesome.com/918ba06b86.js" crossorigin="anonymous"></script>
    </head>
    <body class="mainContainer flex flex-col h-screen justify-between text-center dark:bg-black dark:text-white mx-auto max-w-screen">
        @include('layouts.navigation')
        <x-notify::notify />
    
        <main class="flex-grow">
            {{ $slot }}
        </main>
    
        @include('layouts.utilities')
    
        <footer class="bg-gray-200 dark:bg-gray-800 text-center">
            @include('layouts.footer')
        </footer>
    </body>
</html>
