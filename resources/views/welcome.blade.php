<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="css/app.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />  
        <script src="{{ asset('js/ee/main.js') }}" type="module"></script>      
    </head>
    <body class="bodyLanding">
        <div class="landingPage">
            <div class="titreLanding">
                <h1>MapleMind</h1>
                <h3><span class="neverAlone">Never alone</span> in your immigration journey</h3>
            </div>
            @auth
                <div class="liens">
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            @else
            <div class="liens">
                <a href="{{ route('login') }}">Log in</a>
                <a href="{{ route('register') }}">Create account</a>
            </div>
            @endauth
        </div>
    </body>
</html>
