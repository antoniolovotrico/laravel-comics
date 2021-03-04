<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="pre_nav">
            <ul class="list-unstyled">
                <li class="bg_white">
                    <a href="#"><img src="{{ asset('img/DC_desktop_blue.svg') }}" alt=""></a>
                </li> 
                <li>
                    <a href="#"><img src="{{ asset('img/DC_community.svg') }}" alt=""></a>
                </li> 
                <li>
                    <a href="#"><img src="{{ asset('img/DC_SHOP_desktop.svg') }}" alt=""></a>
                </li> 
                <li>
                    <a href="#"><img src="{{ asset('img/DC_SHOP_desktop.svg') }}" alt=""></a>
                </li> 
                <li>
                    <a href="#"><img src="{{ asset('img/DC_on_HBOMAX_desktop.svg') }}" alt=""></a>
                </li> 
        </div>

        <div class="container_nav">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/DC_desktop_blue.svg') }}" alt="">
            </a>

            
                <!-- Left Side Of Navbar -->
                <ul class="nav_left">
                    <li>
                        <a  href="#">CHARACTERS</a>
                    </li>

                    <li>
                        <a  href="{{ route('comics.index') }}" class="{{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}">COMICS</a>
                    </li>
                    
                    @foreach ($menu_link as $item)
                    <li>
                        <a  href="#">{{ $item['name'] }}</a>
                    </li>
                    @endforeach

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav_right">
                    <li>
                        <a id="search" href="#"> Search <i class="fa fa-search" aria-hidden="true"></i></a>
                    </li>
                    
                    <!-- Authentication Links -->
                    {{-- @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest --}}
                </ul>
            </div>
        </div>
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
