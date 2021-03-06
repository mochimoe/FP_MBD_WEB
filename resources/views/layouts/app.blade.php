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
    {{-- <link rel="stylesheet" href="{{asset('css/formcss/style.css')}}"> --}}
    
    @yield('css')

    <style>
        .py3{
            padding-top: 5%;
        }
        </style>
</head>
<body @yield('bodycss')>
    <!-- Start Header Area -->
	<header id="header" class="bg-dark">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div>
                        <a href="/" ><h4 style="color:white">BACA BUKU</h4></a>
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
                                            <li><a href="/kategoris/create">Kategori</a></li>
                                            <li><a href="/mempunyais/create">Mempunyai</a></li>
                                            <li><a href="/penerbits/create">Penerbit</a></li>
                                            <li><a href="/pengarangs/create">Pengarang</a></li>
                                            <li><a href="/petugass/create">Petugas</a></li>
                                            <li><a href="/raks/create">Rak</a></li>
                                            <li><a href="/transpims/create">Transaksi Peminjaman</a></li>
                                            <li><a href="/transkems/create">Transaksi Pengembalian</a></li>
    
    
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">Pages</a>
                                    <ul>
                                            <li><a href="/anggotas">Anggota</a></li>
                                            <li><a href="/bukus">Buku</a></li>
                                            <li><a href="/dipinjams">Buku Dipinjam</a></li>
                                            <li><a href="/kategoris">Kategori</a></li>
                                            <li><a href="/mempunyais">Mempunyai</a></li>
                                            <li><a href="/penerbits">Penerbit</a></li>
                                            <li><a href="/pengarangs">Pengarang</a></li>
                                            <li><a href="/petugass">Petugas</a></li>
                                            <li><a href="/raks">Rak</a></li>
                                            <li><a href="/transpims">Transaksi Peminjaman</a></li>
                                            <li><a href="/transkems">Transaksi Pengembalian</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">Query</a>
                                    <ul>
                                        <li class="menu-has-children"><a href="">Bintang</a>
                                            <ul>
                                                <li><a href="/bintangs/view1">View 1</a></li>
                                                <li><a href="/bintangs/view2">View 2</a></li>
                                                <li><a href="/bintangs/function1">Function 1</a></li>
                                                <li><a href="/bintangs/function2">Function 2</a></li>
                                                <li><a href="/bintangs/procedure1input">Procedure 1 in</a></li>
                                                <li><a href="/bintangs/procedure2">Procedure 2</a></li>
                                                <li><a href="/bintangs/join1">Join 1</a></li>
                                                <li><a href="/bintangs/join2">Join 2</a></li>
                                            </ul>
    
                                        </li>
                                        <li class="menu-has-children"><a href="">Tria</a>
                                            <ul>
                                                <li><a href="/aiss/view1">View 1</a></li>
                                                <li><a href="/aiss/view2">View 2</a></li>
                                                <li><a href="/aiss/function1">Function 1</a></li>
                                                <li><a href="/aiss/function2">Function 2</a></li>
                                                <li><a href="/aiss/procedure1input">Procedure 1</a></li>
                                                <li><a href="/aiss/procedure2input">Procedure 2 in</a></li>
                                                <li><a href="/aiss/join1">Join 1</a></li>
                                                <li><a href="/aiss/join2">Join 2</a></li>
                                            </ul>
    
                                        </li>
                                        <li class="menu-has-children"><a href="">Shania</a>
                                            <ul>
                                                <li><a href="">View 1</a></li>
                                                <li><a href="">View 2</a></li>
                                                <li><a href="">Function 1</a></li>
                                                <li><a href="">Function 2</a></li>
                                                <li><a href=""></a>Procedure 1</li>
                                                <li><a href=""></a>Procedure 2 in</li>
                                                <li><a href=""></a>Join 1</li>
                                                <li><a href=""></a>Join 2</li>
                                            </ul>
    
                                        </li>
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

        <section class="container" @yield('sectcss')>
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
