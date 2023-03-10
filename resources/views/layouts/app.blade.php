<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="shortcut icon" type="image/x-icon" href="./img/buhoFavicon.png">    
    <title>Atenea</title>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Francois+One&family=Montserrat&family=Rye&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <link href="{{ asset('css\login.css') }}" rel="stylesheet">
    <link href="{{ asset('css\email.css') }}" rel="stylesheet">
    <link href="{{ asset('css\app.css') }}" rel="stylesheet">
    <link href="{{ asset('css\footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css\validation.css') }}" rel="stylesheet">
    <link href="{{ asset('css\forms.css') }}" rel="stylesheet">
    <link href="{{ asset('css\homeView.css') }}" rel="stylesheet">
    <link href="{{ asset('css\showUser.css') }}" rel="stylesheet">
    <link href="{{ asset('css\gradeTable.css') }}" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="{{ asset('js\validateForm.js') }}" rel="text/javascript"></script>
</head>
<body>
    <div id="app">
        <div class="header" style="height:20%">
            <div class="logoConteiner">
                <img class="logoAtenea" src="https://res.cloudinary.com/de1i08drf/v1675076938/Atenea/ATENEABlanco_gj4xpi.png" style="width: 20%; margin-right: 30px">
                <p class="slogan">Tu acompañante escolar</p>
                <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                        </ul>

                        <ul class="navbar-nav ms-auto">
                            @guest

                            @else
                                <li id="logName" class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" francois-haspopup="true" francois-expanded="false" v-pre style="color:white;">
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end logoutButton" style="background:#70A9A1; text-align:center; width:20%" francois-labelledby="navbarDropdown">
                                        <a id="outButton" class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts.components.footer')
</body>
</html>
