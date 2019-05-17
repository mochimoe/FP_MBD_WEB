<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Baca Buku</title>

	<!--
			Google Font
			============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div>
					<a href="/" ><h4 style="color:white">BACA BUKU</h4></a>
				</div>
				<nav id="nav-menu-container">
						{{-- @if (Route::has('login')) --}}
					<ul class="nav-menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="about.html">About</a></li>
							<li><a href="courses.html">Input</a>
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


	<!-- Start Banner Area -->
	<section class="home-banner-area relative">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8 col-md-12">
					<h1 class="wow fadeIn" data-wow-duration="4s">Kami Menyediakan Buku<br> Terbaik dan Berkualitas</h1>
					<p class="text-white">
						“Semakin banyak kamu membaca, semakin banyak hal yang akan kamu ketahui. Semakin kamu belajar, semakin banyak tempat yang akan kamu datangi.” <small>— Dr. Seuss.</small>
					</p>

				</div>
			</div>
		</div>
		<div class="rocket-img">
			<img src="img/rocket.png" alt="">
		</div>
	</section>
	<!-- End Banner Area -->


	<!-- Start About Area -->
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 col-md-6 about-left">
					<img class="img-fluid" src="img/about.jpg" alt="">
				</div>
				<div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
					<h1>
						Sepatah Kata <br> Dari Kami
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							Website ini dibuat dalam rangka menyelesaikan Final Project dari mata kuliah
							Manajemen Basis Data, kami mengambil topik final project yaitu sistem peminjaman buku
							online. Website ini dikembangkan olehh 3 mahasiswa Institut Teknologi Nopember Departement Informatika
							yaitu: Bintang Nuralamsyah , Tria Nur Aisyah dan Shania. Diharapkan kami mendapatkan nilai maksimal pada akhirnya nanti.
						</p>
			</div>
		</div>
	</section>
	<!-- End About Area -->


	<!-- Start Courses Area -->
	<section class="courses-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 about-right">
					<h1>
						This is Why <br> We have Solid Idea
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think
							about setting up your own viewing station. In the life of any aspiring astronomer that it is time to buy that first
							telescope. It’s exciting to think about setting up your own viewing station.
						</p>
					</div>
					<a href="courses.html" class="primary-btn white">Explore Courses</a>
				</div>
				<div class="offset-lg-1 col-lg-6">
					<div class="courses-right">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<ul class="courses-list">
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".1s">
											<i class="fa fa-book"></i> Development
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".3s">
											<i class="fa fa-book"></i> IT & Software
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".5s">
											<i class="fa fa-book"></i> Photography
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".7s">
											<i class="fa fa-book"></i> Language
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".9s">
											<i class="fa fa-book"></i> Life Science
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay="1.1s">
											<i class="fa fa-book"></i> Business
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay="1.3s">
											<i class="fa fa-book"></i> Socoal Science
										</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<ul class="courses-list">
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay="1.3s">
											<i class="fa fa-book"></i> Data Science
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay="1.1s">
											<i class="fa fa-book"></i> Design
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".9s">
											<i class="fa fa-book"></i> Training
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".7s">
											<i class="fa fa-book"></i> Humanities
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".5s">
											<i class="fa fa-book"></i> Marketing
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".3s">
											<i class="fa fa-book"></i> Economics
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".1s">
											<i class="fa fa-book"></i> Personal Dev
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Courses Area -->


	<!-- Start Footer Area -->
	<footer class="footer-area ">
		<div class="container">
	
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Area -->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#"></a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>