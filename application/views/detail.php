<!--header-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>Our Recipe</title>

	<!-- Favicon -->
	<link rel="icon" href="<?php echo base_url('public/img/core-img/favivon.ico');?>">

	<!-- Core Stylesheet -->
	<link rel="stylesheet" type="text/css" href="public/style2.css">


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
									<li><a href="#">Welcome to Our Recipe.</a></li>
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
						<a class="nav-brand" href=""><img src="public/img/core-img/logogogo.png" alt=""></a>

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
									<li><a href="<?php echo base_url('home'); ?>">Home</a></li>
									<li><a href="<?php echo base_url('lists'); ?>">Menu List</a></li>
									<li><a href="<?php echo base_url('submits'); ?>">Submit Menu</a></li>
									<li><a href="<?php echo base_url('contacts'); ?>">Contact</a></li>
									<li class="active"><a href="<?php echo base_url('details'); ?>">Detail Recipe</a>
									</li>
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

	<!-- ##### Breadcumb Area Start ##### -->
	<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(public/img/baru/bumbu.jpg);">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12">
					<div class="breadcumb-text text-center">
						<h2>Recipe</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ##### Breadcumb Area End ##### -->

	<div class="receipe-post-area section-padding-80">

		<!-- Receipe Post Search -->
		<!-- <div class="receipe-post-search mb-80">
            <div class="container">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <select name="select1" id="select1">
                                <option value="1">All Receipies Categories</option>
                                <option value="1">All Receipies Categories 2</option>
                                <option value="1">All Receipies Categories 3</option>
                                <option value="1">All Receipies Categories 4</option>
                                <option value="1">All Receipies Categories 5</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-3">
                            <select name="select1" id="select2">
                                <option value="1">All Receipies Categories</option>
                                <option value="1">All Receipies Categories 2</option>
                                <option value="1">All Receipies Categories 3</option>
                                <option value="1">All Receipies Categories 4</option>
                                <option value="1">All Receipies Categories 5</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-3">
                            <input type="search" name="search" placeholder="Search Receipies">
                        </div>
                        <div class="col-12 col-lg-3 text-right">
                            <button type="submit" class="btn delicious-btn">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->

		<!-- Receipe Slider -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="receipe-slider owl-carousel">
						<img src="public/img/baru/adobo.jpg" alt="">
						<img src="public/img/baru/adobo.jpg" alt="">
						<img src="public/img/baru/adobo.jpg" alt="">
					</div>
				</div>
			</div>
		</div>

		<!-- Receipe Content Area -->
		<div class="receipe-content-area">
			<div class="container">

				<div class="row">
					<div class="col-12 col-md-8">
						<div class="receipe-headline my-5">
							<span>April 05, 2023</span>
							<h2>Chicken Adobo</h2>
							<div class="receipe-duration">
								<h5>
									Prep: <span>15 minutes</span>
									Cook: <span>30 minutes</span>
								</h5>
								<h5>Price: <span id="ingredient-7-quantity">50 </span>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-4">
						<div class="receipe-ratings text-right my-5">
							<div class="ratings">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<!-- <a href="#" class="btn delicious-btn">For Begginers</a> -->
							<label for="servings">Servings:</label>

							<button type="button" id="decrease" class="btn delicious-btn-2">-</button>
							<input type="number" name="servings" id="servings" value="1" min="1" class="input-service">
							<button type="button" id="increase" class="btn delicious-btn-2">+</button>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12 col-lg-8">

						<h4>Instructions</h4>

						<?php 
                        $this->load->database('recipe_db');
                        $query = $this->db->get_where('recipe_details', array('id' => 1));
                        
                        if ($query->num_rows() > 0) {
                            $row = $query->row();
                            for ($i = 1; $i <= 5; $i++) {
                                 $step = "recipe_step" . $i;
                                 echo '<div class="single-preparation-step d-flex">';
                                 echo '<h5>0' . $i . '.</h5>';
                                 echo $row->$step;
                                 echo '</div><br>';
                                }
                            } else {
                                echo "Not found.";
                            }   
                            ?>
                        </div>


					<!-- Ingredients -->
					<!-- <div class="col-8 col-lg-4"> -->
					<div class="ingredients">
						<h4>Ingredients</h4>

						<!-- Custom Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Chicken Thighs: <span
									id="ingredient-1-quantity">6</span> pieces</label>
						</div>

						<!-- Custom Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck2">
							<label class="custom-control-label" for="customCheck2">Soy Sauce: <span
									id="ingredient-2-quantity">1/2</span> cup</label>
						</div>

						<!-- Custom Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck3">
							<label class="custom-control-label" for="customCheck3">Vinegar: <span
									id="ingredient-3-quantity">1/4</span> cup</label>
						</div>

						<!-- Custom Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck4">
							<label class="custom-control-label" for="customCheck4">Garlic: <span
									id="ingredient-4-quantity">4</span> cloves, minced</label>
						</div>

						<!-- Custom Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck5">
							<label class="custom-control-label" for="customCheck5">Bay Leaves: <span
									id="ingredient-5-quantity">2</span></label>
						</div>

						<!-- Custom Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck6">
							<label class="custom-control-label" for="customCheck6">Peppercorns: <span
									id="ingredient-6-quantity">8</span></label>
						</div>

						<!-- Custom Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck6">
							<label class="custom-control-label" for="customCheck6">Water: <span
									id="ingredient-6-quantity">4</span> cup</label>
						</div>

						<!-- Custom Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck6">
							<label class="custom-control-label" for="customCheck6">Cooking Oil: <span
									id="ingredient-6-quantity">4</span> tablespoons</label>
						</div>

						<!-- Custom Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck6">
							<label class="custom-control-label" for="customCheck6">Sugar: <span
									id="ingredient-6-quantity">1</span> teaspoon</label>
						</div>
					</div>
				</div>
			</div>

			<!-- X -->

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
								<a href=""><img src="public/img/core-img/logogogo.png" alt=""></a>
							</div>
							<!-- Copywrite -->
							<p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>
									document.write(new Date().getFullYear());

								</script> All rights reserved | This template is made with <i class="fa fa-heart-o"
									aria-hidden="true"></i> by <a href="https://colorlib.com"
									target="_blank">Colorlib</a>
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

			<!--ingridients js-->
			<script>
				document.addEventListener("DOMContentLoaded", function () {
					const servingsInput = document.getElementById("servings");
					const decreaseButton = document.getElementById("decrease");
					const increaseButton = document.getElementById("increase");

					decreaseButton.addEventListener("click", () => {
						if (servingsInput.value > 1) {
							servingsInput.value--;
							updateIngredients();
						}
					});

					increaseButton.addEventListener("click", () => {
						servingsInput.value++;
						updateIngredients();
					});

					servingsInput.addEventListener("input", updateIngredients);

					function updateIngredients() {
						const servingSize = parseInt(servingsInput.value);
						const ingredient1Quantity = servingSize * 6; // Chicken Thighs
						const ingredient2Quantity = servingSize * 0.5; // Soy Sauce (in cups)
						const ingredient3Quantity = servingSize * 0.25; // Vinegar (in cups)
						const ingredient4Quantity = servingSize * 4; // Garlic (cloves)
						const ingredient5Quantity = servingSize * 2; // Bay Leaves
						const ingredient6Quantity = servingSize * 8; // Peppercorns
						const ingredient7Quantity = servingSize * 50; // Price 
						const ingredient8Quantity = servingSize * 1; // Price 

						document.getElementById("ingredient-1-quantity").textContent = ingredient1Quantity;
						document.getElementById("ingredient-2-quantity").textContent = ingredient2Quantity;
						document.getElementById("ingredient-3-quantity").textContent = ingredient3Quantity;
						document.getElementById("ingredient-4-quantity").textContent = ingredient4Quantity;
						document.getElementById("ingredient-5-quantity").textContent = ingredient5Quantity;
						document.getElementById("ingredient-6-quantity").textContent = ingredient6Quantity;
						document.getElementById("ingredient-7-quantity").textContent = ingredient7Quantity;
						document.getElementById("ingredient-8-quantity").textContent = ingredient8Quantity;
					}
				});

			</script>
</body>

</html>
