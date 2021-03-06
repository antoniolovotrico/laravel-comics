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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/DC_desktop_blue.svg') }}" alt="">
                </a>
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item" >
                            <a class="nav-link" href="{{ route('comics.index') }}" class="{{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}">Go To The Site</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container_admin">
            <aside class="">
                <div class="">
                    <div class=""">
                        <div>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ route('admin.comics.index') }}" class="{{ Route::currentRouteName() ===  'admin.comics.index' ? 'active' : '' }}"><i class="fas fa-book-open fa-lg fa-fw mx-2"></i>Comics</a>
                                </li> 
                                <li>
                                    <a href="{{ route('admin.collections.index') }}" class="{{ Route::currentRouteName() ===  'admin.collections.index' ? 'active' : '' }}"><i class="fas fa-book fa-lg fa-fw mx-2"></i>Series</a>
                                </li> 
                                {{-- {{ route('admin.posts.index') }}" class="{{ Route::currentRouteName() ===  'admin.posts.index' ? 'active' : '' }}" --}}
                                {{-- <li>
                                    <a href="{{ route('categories.index') }}" class="{{ Route::currentRouteName() ===  'categories.index' ? 'active' : '' }}"><button><i class="fas fa-tools"></i>Category</button></a>
                                </li> 
                                <li> 
                                    <a href="{{ route('tags.index') }}" class="{{ Route::currentRouteName() ===  'tags.index' ? 'active' : '' }}"><button><i class="fas fa-tools"></i>Tag</button></a> 
                                </li> --}}
                            </ul>
                            
                        </div>
                        
                    </div>
                </div>
            </aside>

            <main class="">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
