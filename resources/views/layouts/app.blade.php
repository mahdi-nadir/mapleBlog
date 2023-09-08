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
    <body class="mainContainer dark:bg-black dark:text-white mx-auto">
                @include('layouts.navigation')
                <x-notify::notify />
                
                <!-- Page Heading -->
                @if (isset($header))
                    <header>
                        <div>
                            {{ $header }}
                        </div>
                    </header>
                @endif
                    
                <!-- Page Content -->
                <main class="">
                    {{ $slot }}
                </main>
            {{-- <script src="{{ asset('js/ee/main.js') }}" type="module"></script> --}}
            @notifyJs
    </body>
</html>
