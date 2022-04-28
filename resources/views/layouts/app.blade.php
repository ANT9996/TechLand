<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TechLand') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="header">
            <div class="logo">TechLand</div>
            <div class="menu">
                <a href="{{route('catalog')}}"><div class="menu-elem">Каталог</div></a>
                @guest()
                    <a href="{{route('login')}}"><div class="menu-elem">Авторизация</div></a>
                    <a href="{{route('register')}}"><div class="menu-elem">Регистрация</div></a>
                @else
                    <a href="{{route('home')}}"><div class="menu-elem">Профиль</div></a>
                    <a href="{{route('logout')}}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        <div class="menu-elem">Выйти</div>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @csrf
                @endguest

            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
