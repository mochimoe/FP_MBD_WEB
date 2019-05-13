<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>



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
                    <div id="logo">
                        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                            {{-- @if (Route::has('login')) --}}
                        <ul class="nav-menu">
                                <li class=""><a href="/">Home</a></li>
                                <li class="menu-has-children"><a href="">Input</a>
                                    <ul>
                                            <li><a href="/anggotas/create">Anggota</a></li>
                                            <li><a href="/bukus/create">Buku</a></li>
                                            <li><a href="/dipinjams/create">Buku Dipinjam</a></li>
                                            <li><a href="/petugass/create">Petugas</a></li>
                                            <li><a href="/kategoris/create">Kategori</a></li>

                                            <li><a href="/penerbits/create">Penerbit</a></li>
                                            <li><a href="/transpims/create">Transaksi Peminjaman</a></li>
                                            <li><a href="/transkems/create">Transaksi Pengembalian</a></li>
    
    
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">Pages</a>
                                    <ul>
                                        <li><a href="/anggotas">Anggota</a></li>
                                        <li><a href="/bukus">Buku</a></li>
                                        <li><a href="/dipinjams">Buku Dipinjam</a></li>
                                        <li><a href="/petugass">Petugas</a></li>
                                        <li><a href="/kategoris">Kategori</a></li>
        
                                        <li><a href="/penerbits">Penerbit</a></li>
                                        <li><a href="/transpims">Transaksi Peminjaman</a></li>
                                        <li><a href="/transkems">Transaksi Pengembalian</a></li>
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

    <script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{asset('js/easing.min.js')}}"></script>
	<script src="{{asset('js/hoverIntent.js')}}"></script>
	<script src="{{asset('js/superfish.min.js')}}"></script>
	<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/owl-carousel-thumb.min.js')}}"></script>
	<script src="{{asset('js/jquery.sticky.js')}}"></script>
	<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('js/parallax.min.js')}}"></script>
	<script src="{{asset('js/waypoints.min.js')}}"></script>
	<script src="{{asset('js/wow.min.js')}}"></script>
	<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('js/mail-script.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
    
</body>
</html>
