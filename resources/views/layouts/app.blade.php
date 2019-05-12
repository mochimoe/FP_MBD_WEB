<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!--Google Font============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">


    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    
    @yield('css')

    <style>
        .py3{
            padding-top: 10%;
        }
        </style>
</head>
<body>
    <!-- Start Header Area -->
	<header id="header" class="bg-dark">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div class="nav-menu">
                        <a href="/" >Library</a>
                    </div>
                    <nav id="nav-menu-container">
                            {{-- @if (Route::has('login')) --}}
                        <ul class="nav-menu">
                                <li class=""><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="courses.html">Input</a></li>
                                <li class="menu-has-children"><a href="">Pages</a>
                                    <ul>
                                        <li><a href="elements.html">Elements</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                        <li><a href="elements.html">Elements</a></li>
        
                                        <li><a href="elements.html">Elements</a></li>
                                    </ul>
                                </li>
                            @guest
                            
                            <li><a href="{{ route('login') }}">Login</a></li>
                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                            @endif
                            
                            @else
                            <li class="menu-has-children"><a href="">{{ Auth::user()->name }}</a>
                                <ul>
                                    <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                    <li><a href="blog-single.html">Blog Details</a></li>
                                </ul>
                            </li>
                            @endguest
                        </ul>
                    </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </header>
        <!-- End Header Area -->

        <section class="container py3">
            @yield('content')
        </section>
    </div>


    
</body>
</html>
