<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{-- <link rel="stylesheet" href="css/app.css"> --}}

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> 
        {{-- <script src="{{ asset('js/ee/main.js') }}" type="module"></script> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bodyLanding">
        <div class="landingPage flex flex-col justify-center items-center gap-4 rounded border-2 border-black md:border-none bg-black bg-opacity-60 md:bg-transparent w-5/6 md:w-1/3 text-center absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] md:top-[25%] md:left-[10%] md:translate-x-[-10%] md:translate-y-[-25%] p-5">
            <div class="titreLanding flex flex-col justify-center items-center gap-2 md:gap-6 mb-8">
                <h1 class="font-bold text-3xl md:text-7xl text-white md:text-black">MapleMind</h1>
                <h3 class="font-bold text-xl md:text-4xl text-white md:text-black"><span>Never alone</span> in your immigration journey</h3>
            </div>
            @auth
                <div class="flex flex-col md:flex-row justify-center items-center gap-2 md:gap-10">
                    <a href="{{ url('/dashboard') }}" class="p-2 text-md md:text-xl bg-red-600 text-white uppercase rounded font-bold w-[120px] hover:bg-red-800">Dashboard</a>
                
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            @else
            <div class="flex flex-col md:flex-row justify-center items-center gap-2 md:gap-10">
                <a href="{{ route('login') }}" class="p-2 text-md md:text-xl bg-red-600 text-white uppercase rounded font-bold w-[120px] hover:bg-red-800">Log in</a>
                <a href="{{ route('register') }}" class="p-2 text-md md:text-xl bg-red-600 text-white uppercase rounded font-bold w-[120px] hover:bg-red-800">Register</a>
            </div>
            @endauth
        </div>
    </body>
</html>
