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
                        <a href="#"> Search </a>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </li> 
                </ul>
            </div>
        </div>
        

        <main>
            @yield('content')
        </main>
        <footer>
            <div class="pre_footer">
                <div class="foot_card">
                    <img src="{{ asset('img/buy-bar-DCUI.svg') }}" alt="">
                    <h6>DIGITAL COMICS</h6>
                </div>
                <div class="foot_card">
                    <img src="{{ asset('img/buy-bar-DCshop.svg') }}" alt="">
                    <h6>DC MERCHANDISE</h6>
                </div>
                <div class="foot_card">
                    <img src="{{ asset('img/buy-bar-subscription.svg') }}" alt="">
                    <h6>PRINT SUBSCRIPTIONS</h6>
                </div>
                <div class="foot_card">
                    <img src="{{ asset('img/buy-bar-locator.svg') }}" alt="">
                    <h6>COMICS SHOP LOCATOR</h6>
                </div>
            </div>
            <div class="foot_nav">
                <div class="foot_left">
                    <div class="foot_links">
                        <ul>
                            <li>
                                <h5>DC COMICS</h5>
                            </li>
                            <li>
                                <a  href="#">Characters</a>
                            </li>
        
                            <li>
                                <a  href="{{ route('comics.index') }}">Comics</a>
                            </li>
                            
                            @foreach ($menu_link as $item)
                            <li>
                                <a  href="#">{{ $item['name'] }}</a>
                            </li>
                            @endforeach
        
                        </ul>
                        <ul>
                            <li>
                                <h5>DC</h5>
                            </li>
                            <li>
                                <a  href="#">Term of use</a>
                            </li>
                            <li>
                                <a  href="#">privacy policy (New)</a>
                            </li>
                            <li>
                                <a  href="#">ad choiches</a>
                            </li>
                            <li>
                                <a  href="#">Tadvertising</a>
                            </li>
                            <li>
                                <a  href="#">jobs</a>
                            </li>
                            <li>
                                <a  href="#">subscription</a>
                            </li>
                            <li>
                                <a  href="#">CPSC Certificates</a>
                            </li>
                            <li>
                                <a  href="#">Ratings</a>
                            </li>
                            <li>
                                <a  href="#">Shop Help</a>
                            </li>
                            <li>
                                <a  href="#">Contact Us</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <h5>SITES</h5>
                            </li>
                            <li>
                                <a  href="#">DC</a>
                            </li>
                            <li>
                                <a  href="#">DC UNIVERSE INFINITE</a>
                            </li>
                            <li>
                                <a  href="#">DC Kids</a>
                            </li>
                            <li>
                                <a  href="#">DC Shop</a>
                            </li>
                            <li>
                                <a  href="#">MAD Magazine</a>
                            </li>
                        </ul>

                    </div>
                    <p>
                        All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="">noted here</a>. All rights reserved. 
                    </p>
                    <p><a href="">Cookies Settings</a></p>

                </div>
                <div class="foot_right">
                    <img src="{{ asset('img/logo-background-v2.png')}}" alt="">
                </div>


            </div>
            <div class="foot_bottom">
                <div class="sign_up">
                    <a href="">SIGN-UP NOW!</a>
                </div>
                <div class="follow">
                    <p>FOLLOW US</p>
                    <a href=""><img src="{{ asset('img/footer-facebook.png')}}" alt=""></a>
                    <a href=""><img src="{{ asset('img/footer-twitter.png')}}" alt=""></a>
                    <a href=""><img src="{{ asset('img/footer-youtube.png')}}" alt=""></a>
                    <a href=""><img src="{{ asset('img/footer-pinterest.png')}}" alt=""></a>
                    <a href=""><img src="{{ asset('img/footer-periscope.png')}}" alt=""></a>
                </div>


            </div>
        </footer>
    </div>
</body>
</html>

