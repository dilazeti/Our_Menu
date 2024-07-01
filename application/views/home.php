<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>Delicious - Our Menu | Home</title>

	<!-- Favicon -->
	<link rel="icon" href="public/img/core-img/favicon.ico">

	<!-- Core Stylesheet -->
	<link rel="stylesheet" href="public/style.css">

</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<i class="circle-preloader"></i>
		<img src="public/img/core-img/salad.png" alt="">
	</div>

	<!-- Search Wrapper -->
	<div class="search-wrapper">
		<!-- Close Btn -->
		<div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

		<div class="container">
			<div class="row">
				<div class="col-12">
					<form action="#" method="post">
						<input type="search" name="search" placeholder="Type any keywords...">
						<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- ##### Header Area Start ##### -->
	<header class="header-area">

		<!-- Top Header Area -->
		<div class="top-header-area">
			<div class="container h-100">
				<div class="row h-100 align-items-center justify-content-between">
					<!-- Breaking News -->
					<div class="col-12 col-sm-6">
						<div class="breaking-news">
							<div id="breakingNewsTicker" class="ticker">
								<ul>
									<li><a href="#">Hello World!</a></li>
									<li><a href="#">Welcome to Our Recipes.</a></li>
									<li><a href="#">Hello Delicious!</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Top Social Info -->
					<div class="col-12 col-sm-6">
						<div class="top-social-info text-right">
							<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Navbar Area -->
		<div class="delicious-main-menu">
			<div class="classy-nav-container breakpoint-off">
				<div class="container">
					<!-- Menu -->
					<nav class="classy-navbar justify-content-between" id="deliciousNav">

						<!-- Logo -->
						<a class="nav-brand" href="home.php"><img src="public/img/core-img/logogogo.png" alt=""></a>

						<!-- Navbar Toggler -->
						<div class="classy-navbar-toggler">
							<span class="navbarToggler"><span></span><span></span><span></span></span>
						</div>

						<!-- Menu -->
						<div class="classy-menu">

							<!-- close btn -->
							<div class="classycloseIcon">
								<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
							</div>

							<!-- Nav Start -->
							<div class="classynav">
								<ul>
									<li class="active"><a href="">Home</a></li>
									<li><a href="<?php echo base_url('lists'); ?>">Menu List</a></li>
									<li><a href="<?php echo base_url('submits'); ?>">Submit Menu</a></li>
									<li><a href="<?php echo base_url('contacts'); ?>">Contact</a></li>
								</ul>

								<!-- Newsletter Form -->
								<div class="search-btn">
									<i class="fa fa-search" aria-hidden="true"></i>
								</div>

							</div>
							<!-- Nav End -->
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ##### Header Area End ##### -->

	<!-- ##### Hero Area Start ##### -->
	<section class="hero-area">
		<div class="hero-slides owl-carousel">
			<!-- Single Hero Slide -->
			<div class="single-hero-slide bg-img" style="background-image: url(public/img/baru/rendang.jpg);">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-12 col-md-9 col-lg-7 col-xl-6">
							<div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
								<h2 data-animation="fadeInUp" data-delay="300ms">Delicios Rendang</h2>
								<p data-animation="fadeInUp" data-delay="700ms">A meat-based dish that results from long periods of low-temperature cooking using a variety of spices and coconut milk.</p>
								<a href="#" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">See
									Receipe</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Single Hero Slide -->
			<div class="single-hero-slide bg-img" style="background-image: url(public/img/baru/soto.jpg);">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-12 col-md-9 col-lg-7 col-xl-6">
							<div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
								<h2 data-animation="fadeInUp" data-delay="300ms">Delicios Soto</h2>
								<p data-animation="fadeInUp" data-delay="700ms">is a traditional Indonesian soup mainly composed of broth, meat, and vegetables. 
									Many traditional soups are called soto, whereas foreign and Western influenced soups are called sop.</p>
								<a href="#" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">See
									Receipe</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Single Hero Slide -->
			<div class="single-hero-slide bg-img" style="background-image: url(public/img/baru/gudeg.jpg);">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-12 col-md-9 col-lg-7 col-xl-6">
							<div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
								<h2 data-animation="fadeInUp" data-delay="300ms">Delicios Gudeg</h2>
								<p data-animation="fadeInUp" data-delay="700ms">Served on its own, gudeg can be considered as a vegetarian food, 
									since it only consists of unripe jackfruit and coconut milk.</p>
								<a href="#" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">See
									Receipe</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ##### Hero Area End ##### -->

	<!-- ##### Top Catagory Area Start ##### -->
	<section class="top-catagory-area section-padding-80-0">
		<div class="container">
			<div class="row">
				<!-- Top Catagory Area -->
				<div class="col-12 col-lg-6">
					<div class="single-top-catagory">
						<img src="public/img/baru/kilawin.jpg" alt="">
						<!-- Content -->
						<div class="top-cta-content">
							<h3>Kilawin</h3>
							<h6>Fast &amp; Fresh</h6>
							<a href="<?php echo base_url('details'); ?>" class="btn delicious-btn">See Full Receipe</a>
						</div>
					</div>
				</div>
				<!-- Top Catagory Area -->
				<div class="col-12 col-lg-6">
					<div class="single-top-catagory">
						<img src="public/img/baru/adobo.jpg" alt="">
						<!-- Content -->
						<div class="top-cta-content">
							<h3>Chicken Adobo</h3>
							<h6>Simple &amp; Delicios</h6>
							<a href="<?php echo base_url('details'); ?>" class="btn delicious-btn">See Full Receipe</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ##### Top Catagory Area End ##### -->

	<!-- ##### Best Receipe Area Start ##### -->
	<section class="best-receipe-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-heading">
						<h3>The Best Receipies</h3>
					</div>
				</div>
			</div>

			<div class="row">
				<!-- Single Best Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-best-receipe-area mb-30">
						<img src="public/img/baru/es-campur.jpg" alt="">
						<div class="receipe-content">
							<a href="receipe-post.html">
								<h5>Es Campur</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>

				<!-- Single Best Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-best-receipe-area mb-30">
						<img src="public/img/baru/es-dawet.jpg" alt="">
						<div class="receipe-content">
							<a href="receipe-post.html">
								<h5>Es Dawet</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>

				<!-- Single Best Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-best-receipe-area mb-30">
						<img src="public/img/baru/rawon.jpg" alt="">
						<div class="receipe-content">
							<a href="receipe-post.html">
								<h5>Rawon</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>

				<!-- Single Best Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-best-receipe-area mb-30">
						<img src="public/img/baru/ronde-titoni.jpg" alt="">
						<div class="receipe-content">
							<a href="receipe-post.html">
								<h5>Ronde Titoni</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>

				<!-- Single Best Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-best-receipe-area mb-30">
						<img src="public/img/baru/bakso-pedas.jpg" alt="">
						<div class="receipe-content">
							<a href="receipe-post.html">
								<h5>Bakso Pedas</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>

				<!-- Single Best Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-best-receipe-area mb-30">
						<img src="public/img/baru/seblak.jpg" alt="">
						<div class="receipe-content">
							<a href="receipe-post.html">
								<h5>Seblak</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ##### Best Receipe Area End ##### -->

	<!-- ##### CTA Area Start ##### -->
	<section class="cta-area bg-img bg-overlay" style="background-image: url(public/img/baru/bumbu.jpg);">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12">
					<!-- Cta Content -->
					<div class="cta-content text-center">
						<h2>More Recipe Indonesian Food</h2>
						<p>There are more than 5,300 authentic Indonesian foods spread from Sabang to Merauke. 
							Some Indonesian foods have been recognized internationally and recognized by UNESCO itself.
							Starting from the main dish to dessert is present in this menu.</p>
						<a href="#" class="btn delicious-btn">Discover all the receipies</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ##### CTA Area End ##### -->

	<!-- ##### Small Receipe Area Start ##### -->
	<section class="small-receipe-area section-padding-80-0">
		<div class="container">
			<div class="row">

				<!-- Small Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-small-receipe-area d-flex">
						<!-- Receipe Thumb -->
						<div class="receipe-thumb">
							<img src="public/img/baru/res-pisang-ijo.jpg" alt="">
						</div>
						<!-- Receipe Content -->
						<div class="receipe-content">
							<span>November 09, 2023</span>
							<a href="receipe-post.html">
								<h5>Es Pisang Ijo</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<p>100 Comments</p>
						</div>
					</div>
				</div>

				<!-- Small Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-small-receipe-area d-flex">
						<!-- Receipe Thumb -->
						<div class="receipe-thumb">
							<img src="public/img/baru/rkerak-telor.jpg" alt="">
						</div>
						<!-- Receipe Content -->
						<div class="receipe-content">
							<span>November 09, 2023</span>
							<a href="receipe-post.html">
								<h5>Kerak Telor</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<p>123 Comments</p>
						</div>
					</div>
				</div>

				<!-- Small Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-small-receipe-area d-flex">
						<!-- Receipe Thumb -->
						<div class="receipe-thumb">
							<img src="public/img/baru/rcenil.jpg" alt="">
						</div>
						<!-- Receipe Content -->
						<div class="receipe-content">
							<span>November 09, 2023</span>
							<a href="receipe-post.html">
								<h5>Cenil</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<p>245 Comments</p>
						</div>
					</div>
				</div>

				<!-- Small Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-small-receipe-area d-flex">
						<!-- Receipe Thumb -->
						<div class="receipe-thumb">
							<img src="public/img/baru/res-buah.jpg" alt="">
						</div>
						<!-- Receipe Content -->
						<div class="receipe-content">
							<span>November 09, 2023</span>
							<a href="receipe-post.html">
								<h5>Es Buah</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<p>500 Comments</p>
						</div>
					</div>
				</div>

				<!-- Small Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-small-receipe-area d-flex">
						<!-- Receipe Thumb -->
						<div class="receipe-thumb">
							<img src="public/img/baru/rcireng.jpg" alt="">
						</div>
						<!-- Receipe Content -->
						<div class="receipe-content">
							<span>November 09, 2023</span>
							<a href="receipe-post.html">
								<h5>Cireng</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<p>689 Comments</p>
						</div>
					</div>
				</div>

				<!-- Small Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-small-receipe-area d-flex">
						<!-- Receipe Thumb -->
						<div class="receipe-thumb">
							<img src="public/img/baru/rpempek.jpg" alt="">
						</div>
						<!-- Receipe Content -->
						<div class="receipe-content">
							<span>November 09, 2023</span>
							<a href="receipe-post.html">
								<h5>Pempek</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<p>742 Comments</p>
						</div>
					</div>
				</div>

				<!-- Small Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-small-receipe-area d-flex">
						<!-- Receipe Thumb -->
						<div class="receipe-thumb">
							<img src="public/img/baru/rsate-ayam.jpg" alt="">
						</div>
						<!-- Receipe Content -->
						<div class="receipe-content">
							<span>November 09, 2023</span>
							<a href="receipe-post.html">
								<h5>Sate Ayam</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<p>390 Comments</p>
						</div>
					</div>
				</div>

				<!-- Small Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-small-receipe-area d-flex">
						<!-- Receipe Thumb -->
						<div class="receipe-thumb">
							<img src="public/img/baru/rbandeng-kuah-kemangi.jpg" alt="">
						</div>
						<!-- Receipe Content -->
						<div class="receipe-content">
							<span>November 09, 2023</span>
							<a href="receipe-post.html">
								<h5>Bandeng Kuah Kemangi</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<p>700 Comments</p>
						</div>
					</div>
				</div>

				<!-- Small Receipe Area -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-small-receipe-area d-flex">
						<!-- Receipe Thumb -->
						<div class="receipe-thumb">
						<img src="public/img/baru/rayam-balado-kemangi.jpg" alt="">
						</div>
						<!-- Receipe Content -->
						<div class="receipe-content">
							<span>November 09, 2023</span>
							<a href="receipe-post.html">
								<h5>Ayam Balado Kemangi</h5>
							</a>
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<p>900 Comments</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ##### Small Receipe Area End ##### -->

	<!-- ##### Quote Subscribe Area Start ##### -->
	<section class="quote-subscribe-adds">
		<div class="container">
			<div class="row align-items-end">
				<!-- Quote -->
				<div class="col-12 col-lg-4">
					<div class="quote-area text-center">
						<span>"</span>
						<h4>Nothing is better than going home to family and eating good food and relaxing</h4>
						<p>John Smith</p>
						<div class="date-comments d-flex justify-content-between">
							<div class="date">November 09, 2023</div>
							<div class="comments">9 Comments</div>
						</div>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-12 col-lg-4">
					<div class="newsletter-area">
						<h4>Subscribe to our newsletter</h4>
						<!-- Form -->
						<div class="newsletter-form bg-img bg-overlay"
							style="background-image: url(img/bg-img/bg1.jpg);">
							<form action="#" method="post">
								<input type="email" name="email" placeholder="Subscribe to newsletter">
								<button type="submit" class="btn delicious-btn w-100">Subscribe</button>
							</form>
							<p>Fusce nec ante vitae lacus aliquet vulputate. Donec sceleri sque accumsan molestie.
								Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
						</div>
					</div>
				</div>

				<!-- Adds -->
				<div class="col-12 col-lg-4">
					<div class="delicious-add">
						<img src="public/img/bg-img/add.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ##### Quote Subscribe Area End ##### -->

	<!-- ##### Follow Us Instagram Area Start ##### -->
	<div class="follow-us-instagram">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h5>Follow Us Instragram</h5>
				</div>
			</div>
		</div>
		<!-- Instagram Feeds -->
		<div class="insta-feeds d-flex flex-wrap">
			<!-- Single Insta Feeds -->
			<div class="single-insta-feeds">
				<img src="public/img/bg-img/insta1.jpg" alt="">
				<!-- Icon -->
				<div class="insta-icon">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</div>

			<!-- Single Insta Feeds -->
			<div class="single-insta-feeds">
				<img src="public/img/bg-img/insta2.jpg" alt="">
				<!-- Icon -->
				<div class="insta-icon">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</div>

			<!-- Single Insta Feeds -->
			<div class="single-insta-feeds">
				<img src="public/img/bg-img/insta3.jpg" alt="">
				<!-- Icon -->
				<div class="insta-icon">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</div>

			<!-- Single Insta Feeds -->
			<div class="single-insta-feeds">
				<img src="public/img/bg-img/insta4.jpg" alt="">
				<!-- Icon -->
				<div class="insta-icon">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</div>

			<!-- Single Insta Feeds -->
			<div class="single-insta-feeds">
				<img src="public/img/bg-img/insta5.jpg" alt="">
				<!-- Icon -->
				<div class="insta-icon">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</div>

			<!-- Single Insta Feeds -->
			<div class="single-insta-feeds">
				<img src="public/img/bg-img/insta6.jpg" alt="">
				<!-- Icon -->
				<div class="insta-icon">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</div>

			<!-- Single Insta Feeds -->
			<div class="single-insta-feeds">
				<img src="public/img/bg-img/insta7.jpg" alt="">
				<!-- Icon -->
				<div class="insta-icon">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- ##### Follow Us Instagram Area End ##### -->

	<!-- ##### Footer Area Start ##### -->
	<footer class="footer-area">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
					<!-- Footer Social Info -->
					<div class="footer-social-info text-right">
						<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</div>
					<!-- Footer Logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="public/img/core-img/logogogo.png" alt=""></a>
					</div>
					<!-- Copywrite -->
					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());

						</script> All rights reserved | This template is made with <i class="fa fa-heart-o"
							aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- ##### Footer Area Start ##### -->

	<!-- ##### All Javascript Files ##### -->
	<!-- jQuery-2.2.4 js -->
	<script src="public/js/jquery/jquery-2.2.4.min.js"></script>
	<!-- Popper js -->
	<script src="public/js/bootstrap/popper.min.js"></script>
	<!-- Bootstrap js -->
	<script src="public/js/bootstrap/bootstrap.min.js"></script>
	<!-- All Plugins js -->
	<script src="public/js/plugins/plugins.js"></script>
	<!-- Active js -->
	<script src="public/js/active.js"></script>
</body>

</html>
