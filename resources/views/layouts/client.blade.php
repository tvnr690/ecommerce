<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gadget Guru') }}</title>

	{{-- <link rel="manifest" href="site.html">
	<link rel="apple-touch-icon" href="icon.html"> --}}
	<!-- Place favicon.ico in the root directory -->

	<!-- bootstrap v4.0.0 -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<!-- fontawesome-icons css -->
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<!-- themify-icons css -->
	<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
	<!-- elegant css -->
	<link rel="stylesheet" href="{{ asset('assets/css/elegant.css') }}">
	<!-- meanmenu css -->
	<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<!-- venobox css -->
	<link rel="stylesheet" href="{{ asset('assets/css/venobox.css') }}">
	<!-- jquery-ui.min css -->
	<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
	<!-- slick css -->
	<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
	<!-- slick-theme css -->
	<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
	<!-- helper css -->
	<link rel="stylesheet" href="{{ asset('assets/css/helper.css') }}">
	<!-- style css -->
	<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
	<!-- responsive css -->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
  	<!--header-area start-->
  	<header class="header-area">
		<!--header-top-->
	  	<div class="header-top d-none d-sm-block">
	  		<div class="container">
	  			<div class="row align-items-center">
	  				<div class="col-sm-9">
	  					<div class="contact-info">
	  						<ul>
	  							<li><i class="fa fa-phone"></i>(88) 0111 223 445 <span>|</span></li>
	  							<li><i class="fa fa-truck"></i>Free shipping on all orders over $ 100</li>
	  							<li><i class="fa fa-phone"></i>Log In <span>|</span></li>
	  							<li><i class="fa fa-phone"></i>Register<span>|</span></li>
                            </ul>
	  					</div>
	  				</div>
	  				<div class="col-sm-3">
						<div class="lang-bar pull-right">
							
							<ul>
								<li><a href="#">Eng <i class="fa fa-angle-down"></i></a>
									<ul>
										<li><a href="#">BEN</a></li>
										<li><a href="#">FRE</a></li>
									</ul>
									<span>|</span>
								</li>
								<li><a href="#">USD <i class="fa fa-angle-down"></i></a>
									<ul>
										<li><a href="#">BDT</a></li>
										<li><a href="#">AUD</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
	  			</div>
	  		</div>
	  	</div>
		<!--header-bottom-->
		<div id="sticker" class="header-bottom">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-sm-2">
						<div class="logo">
							<a href="index-2.html"><img src="assets/images/logo.png" alt="logo"></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="mainmenu text-center">
							<nav>
								<ul>
									<li><a href="index-2.html">Home</a>
										<ul class="submenu">
											<li><a href="index-2.html">Home Version 1</a></li>
											<li><a href="index-3.html">Home Version 2</a></li>
											<li><a href="index-4.html">Home Version 3</a></li>
											<li><a href="index-5.html">Home Version 4</a></li>
											<li><a href="index-6.html">Home Version 5</a></li>
										</ul>
									</li>
									<li><a href="#">Pages</a>
										<ul class="submenu">
											<li><a href="about.html">About Us</a></li>
											<li><a href="coming-soon.html">Coming Soon</a></li>
											<li><a href="404.html">Error 404</a></li>
										</ul>
									</li>
									<li><a href="#">Services</a>
										<ul class="submenu">
											<li><a href="service-1.html">Service 1</a></li>
											<li><a href="service-2.html">Service 2</a></li>
											<li><a href="service-3.html">Service 3</a></li>
										</ul>
									</li>
									<li><a href="#">Gallery</a>
										<ul class="submenu">
											<li><a href="gallery.html">Gallery</a></li>
											<li><a href="gallery-details.html">Gallery Details</a></li>
										</ul>
									</li>
									<li><a href="#">Blog</a>
										<ul class="submenu">
											<li><a href="blog-1.html">Blog One</a></li>
											<li><a href="blog-2.html">Blog Two</a></li>
											<li><a href="blog-3.html">Blog Three</a></li>
											<li><a href="blog-4.html">Blog Four</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</li>
									<li><a href="#">Shop</a>
										<ul class="mega-menu">
											<li class="megamenu-single">
												<span class="mega-menu-title">Shop Page</span>
												<ul>
													<li><a href="shop.html">Shop Sidebar</a></li>
													<li><a href="shop-full-width.html">Shop Fullwidth</a></li>
													<li><a href="shop-filter.html">Shop Filter</a></li>
													<li><a href="product-details.html">Product Details</a></li>
												</ul>
											</li>
											<li class="megamenu-single">
												<span class="mega-menu-title">Featured</span>
												<ul>
													<li><a href="shopping-cart.html">Shopping Cart</a></li>
													<li><a href="checkout.html">Check Out</a></li>
													<li><a href="order-complete.html">Complete</a></li>
												</ul>
											</li>
											<li class="megamenu-single">
												<img src="assets/images/ad/3.jpg" alt="" />
											</li>
										</ul>
									</li>
									<li><a href="contact.html">Contact Us</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="search-and-cart">
							<!--search-box-->
							<div class="search search-box">
								<i class="fa fa-search searching-icon"></i>
								<div class="search-place">
									<input type="text" placeholder="Search" />
								</div>							
							</div>	
							<!--shopping-cart-->
							<div class="cart-link">
								<a href="javascript:void(0);">
									<i class="fa fa-shopping-cart"></i>
									<span>2</span>
								</a>
								<ul class="list-none cart-dropdown">
									<li>
										<div class="mini-cart-thumb">
											<a href="#"><img src="assets/images/cart/1.jpg" alt="" /></a>
										</div>
										<div class="mini-cart-heading">
											<h5><a href="#">Aloe vera - herbal</a></h5>
											<span>2 x $140.00</span>
										</div>
										<div class="mini-cart-remove">
											<button><i class="fa fa-trash-o" aria-hidden="true"></i></button>
										</div>
									</li>
									<li>
										<div class="mini-cart-thumb">
											<a href="#"><img src="assets/images/cart/2.jpg" alt="" /></a>
										</div>
										<div class="mini-cart-heading">
											<h5><a href="#">Haworthia Wide Zebra</a></h5>
											<span>1 x $100.00</span>
										</div>		  		                              
										<div class="mini-cart-remove">
											<button><i class="fa fa-trash-o" aria-hidden="true"></i></button>
										</div>
									</li>
									<li>
										<div class="mini-cart-thumb">
											<a href="#"><img src="assets/images/cart/3.jpg" alt="" /></a>
										</div>
										<div class="mini-cart-heading">
											<h5><a href="#">Echeveria Succulent</a></h5>
											<span>1 x $100.00</span>
										</div>		  		                              
										<div class="mini-cart-remove">
											<button><i class="fa fa-trash-o" aria-hidden="true"></i></button>
										</div>
									</li>
									<li>
										<div class="mini-cart-total">
											<h5>Total: $280.00</h5>
										</div>
										<div class="mini-cart-checkout">
											<a href="checkout.html">Checkout</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  	</header>
  	<!--header-area end-->
	  @section('home-banner')

	  @show
	  @section('products-banner')

	  @show
	  @section('products-area')
		  
	  @show
	  @section('ad-banner')
		  
	  @show
	  @section('about-area')
		  
	  @show
	  @section('counterUp-area')
		  
	  @show
	  @section('blog-area')
		  
	  @show
	  @section('subscribe-area')
		  
	  @show



	<!--footer-area start-->
	<footer class="footer-area">
		<!--footer-top-->
		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget">
							<h4>About Company</h4>
							<div class="about-widget">
								<p>It is a long established fact that a reader will be distracted by readable content of a page when looking at layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget">
							<h4>Twitter Feed</h4>
							<div class="twitter-feed">
								<ul class="list-none">
									<li>
										<ul class="list-none inline-list">
											<li><a href="#"><i class="social_twitter"></i>Thegarden</a> <span>|</span></li>
											<li>8 months ago</li>
										</ul>   
										<p>It's an exclusive offer. Varmo Magento Multipurpose Responsive Theme</p>
									</li>
									<li>
										<ul class="list-none inline-list">
											<li><a href="#"><i class="social_twitter"></i>Thegarden</a> <span>|</span></li>
											<li>8 months ago</li>
										</ul>   
										<p>It's an exclusive offer. Varmo Magento Multipurpose Responsive Theme</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget">
							<h4>Instagram</h4>
							<div class="instagram-imgages">
								<a href="#"><img src="assets/images/instagram/1.jpg" alt="instagram" /></a>
								<a href="#"><img src="assets/images/instagram/2.jpg" alt="instagram" /></a>
								<a href="#"><img src="assets/images/instagram/3.jpg" alt="instagram" /></a>
								<a href="#"><img src="assets/images/instagram/4.jpg" alt="instagram" /></a>
								<a href="#"><img src="assets/images/instagram/5.jpg" alt="instagram" /></a>
								<a href="#"><img src="assets/images/instagram/6.jpg" alt="instagram" /></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget">
							<h4>Working Hours</h4>
							<div class="work-hours">
								<ul class="list-none">
									<li>Monday <span>07:00-17:00</span></li>
									<li>Tuesday <span>07:00-17:00</span></li>
									<li>Wednesday <span>07:00-17:00</span></li>
									<li>Thursday <span>07:00-17:00</span></li>
									<li>Friday <span>07:00-17:00</span></li>
									<li>Saturday <span>07:00-17:00</span></li>
									<li>Sunday <span>CLOSE</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--footer copyright-->
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<p>Copyright &copy; 2019 The Garden. All rights reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--footer-area end-->
  
	<!-- modernizr js -->
	<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
	<!-- jquery-1.12.0 version -->
	<script src="{{ asset('assets/js/vendor/jquery-1.12.0.min.js') }}"></script>
	<!-- bootstra.min js -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- meanmenu js -->
	<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
	<!-- easing js -->
	<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
	<!---venobox-js-->
	<script src="{{ asset('assets/js/venobox.min.js') }}"></script>
	<!---slick-js-->
	<script src="{{ asset('assets/js/slick.min.js') }}"></script>
	<!---waypoints-js-->
	<script src="{{ asset('assets/js/waypoints.js') }}"></script>
	<!---counterup-js-->
	<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
	<!---isotop-js-->
	<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<!-- jquery-ui js -->
	<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
	<!-- jquery.countdown js -->
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<!-- plugins js -->
	<script src="{{ asset('assets/js/plugins.js') }}"></script>
	<!-- main js -->
	<script src="{{ asset('assets/js/main.js') }}"></script>
  
</body>

</html>
