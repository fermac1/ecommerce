
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>Maxshop - Premium Multipurpose HTML5/CSS3 Theme</title>
	<meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Favicon
	============================================ -->
    <link rel="shortcut icon" href="{{ asset('/frontend/ico/favicon.png') }}">
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
	
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap/css/bootstrap.min.css') }}">
	<link href="{{ asset('/frontend/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/frontend/js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('/frontend/css/themecss/lib.css') }}" rel="stylesheet">
	<link href="{{ asset('/frontend/js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="{{ asset('/frontend/css/themecss/so_megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/themecss/so-categories.css') }}" rel="stylesheet">
	<link href="{{ asset('/frontend/css/themecss/so-listing-tabs.css') }}" rel="stylesheet">
	<link href="{{ asset('/frontend/css/themecss/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('/frontend/css/themecss/so-super-category.css') }}" rel="stylesheet">
	<link id="color_scheme" href="{{ asset('/frontend/css/theme.css') }}" rel="stylesheet">
	<link href="{{ asset('/frontend/css/responsive.css') }}" rel="stylesheet">
	

</head>

<body class="common-home res layout-home1">
    <div id="wrapper" class="wrapper-full banners-effect-7">
		<!-- Header Container  -->
		<header id="header" class=" variantleft type_1">
			<!-- Header Top -->
			<div class="header-top compact-hidden">
				<div class="container">
					<div class="row">
						<div class="header-top-left  col-lg-4  hidden-sm col-md-5 hidden-xs">
							<ul class="list-inlines">
								<li class="hidden-xs" >
									<div class="welcome-msg"> 
										<ul class="list-msg"> 
											<li><label class="label-msg">This week</label> <a href="#">Sale special too good to miss in every gear</a></li> 
											<li><label class="label-msg">Tomorrow</label> <a href="#">Laten ipsum dolor sit amet. In gravida pellen</a></li> 
										</ul> 
									</div>
								</li>
							</ul>
							
						</div>
						<div class="header-top-right collapsed-block col-lg-8 col-sm-12 col-md-7 col-xs-12 ">
							<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
							<div class="tabBlock" id="TabBlock-1">
								<ul class="top-link list-inline">
									<li class="account" id="my_account">
										<a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >My Account</span> <span class="fa fa-angle-down"></span></a>
										@if (!Auth::check())
										<ul class="dropdown-menu ">
											<li><a href="{{ url('register') }}"><i class="fa fa-user"></i> Register</a></li>
											<li><a href="{{ url('login') }}"><i class="fa fa-pencil-square-o"></i> Login</a></li>
										</ul>
										@endif
										
									</li>
									<li class="wishlist "><a href="{{ url('wishlist') }}" id="wishlist-total" class="top-link-wishlist" title="Wish List (2)"><span>Wish List (2)</span></a></li>
									<li class="checkout hidden"><a href="checkout.html" class="top-link-checkout" title="Checkout"><span >Checkout</span></a></li>
									<li class="login hidden"><a href="cart.html" title="Shopping Cart"><span >Shopping Cart</span></a></li>
									<li class="form-group currency currencies-block">
										<form action="index.html" method="post" enctype="multipart/form-data" id="currency">
											<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
												<span class="icon icon-credit "></span> US Dollar <span class="fa fa-angle-down"></span>
											</a>
											<ul class="dropdown-menu btn-xs">
												<li> <a href="#">(€)&nbsp;Euro</a></li>
												<li> <a href="#">(£)&nbsp;Pounds	</a></li>
												<li> <a href="#">($)&nbsp;US Dollar	</a></li>
											</ul>
										</form>
									</li>
									<li class="form-group languages-block ">
										<form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
											<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
												<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/flags/gb.png') }}" alt="English" title="English">
												<span class="">English</span>
												<span class="fa fa-angle-down"></span>
											</a>
											<ul class="dropdown-menu">
												<li><a href="index.html"><img class="image_flag lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/flags/gb.png') }}" alt="English" title="English" /> English </a></li>
												<li> <a href="index.html"> <img class="image_flag lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/flags/lb.png') }}" alt="Arabic" title="Arabic" /> Arabic </a> </li>
											</ul>
										</form>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header Top -->
			<!-- Header center -->
			<div class="header-center">
				<div class="container">
					<div class="row">
						<!-- LOGO -->
						<div class="navbar-logo col-md-3 col-sm-4 col-xs-10">
						   <a href="index.html"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/logos/theme_logo.png') }}" title="Your Store" alt="Your Store" /></a>
						</div>
						<div class="header-center-right col-md-9 col-sm-8 col-xs-2">
							<div class="responsive so-megamenu  megamenu-style-dev">
								<nav class="navbar-default">
									<div class=" container-megamenu  horizontal">
										<div class="navbar-header">
											<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>	
										</div>
										
										<div class="megamenu-wrapper ">
											<span id="remove-megamenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu " data-transition="slide" data-animationtime="250">
														<li class="home hover">
															<a href="{{ url('/')}}">Home <b class="caret"></b></a>
															<div class="sub-menu" style="width:100%;" >
																<div class="content" >
																	<div class="row">
																		<div class="col-md-3">
																			<a href="index.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/home-1.jpg') }}" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - (Default)</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home2.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/home-2.jpg') }}" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 2</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home3.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/home-3.jpg') }}" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 3</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home4.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border  lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/home-4.jpg') }}" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 4</h3> 
																			</a> 
																			
																		</div>
																		
																		<div class="col-md-3">
																			<a href="home5.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/home-5.jpg') }}" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 5</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home6.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/home-6.jpg') }}" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 6</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home7.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/home-7.jpg') }}" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 7</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home8.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/home-8.jpg') }}" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 8</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home9.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/home-9.jpg') }}" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 9</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home10.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/home-10.jpg') }}" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 10</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/home-11.jpg') }}" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 11</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/home-12.jpg') }}" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 12</h3> 
																			</a> 
																			
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>
																	
																	Features
																</strong>
							
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 100%; right: auto;">
																<div class="content" >
																	<div class="row">
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Listing pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="category.html">Category Page 1 </a></li>
																						<li><a href="category-v2.html">Category Page 2</a></li>
																						<li><a href="category-v3.html">Category Page 3</a></li>
																					</ul>
																					
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Product pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="product.html">Product Page 1</a></li>
																						<li><a href="product-v2.html">Product Page 2</a></li>
																						<li><a href="product-v3.html">Product Page 3</a></li>
																						<li><a href="product-v4.html">Product Page 4</a></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Shopping pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="cart.html">Shopping Cart Page</a></li>
																						<li><a href="checkout.html">Checkout Page</a></li>
																						<li><a href="compare.html">Compare Page</a></li>
																						<li><a href="{{ url('wishlist') }}">Wishlist Page</a></li>
																					
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">My Account pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="login.html">Login Page</a></li>
																						<li><a href="register.html">Register Page</a></li>
																						<li><a href="my-account.html">My Account</a></li>
																						<li><a href="order-history.html">Order History</a></li>
																						<li><a href="order-information.html">Order Information</a></li>
																						<li><a href="return.html">Product Returns</a></li>
																						<li><a href="gift-voucher.html">Gift Voucher</a></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/hot-icon.png') }}" alt="">Pages</strong>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 40%; ">
																<div class="content" >
																	<div class="row">
																		<div class="col-md-6">
																			<ul class="row-list">
																				<li><a class="subcategory_item" href="faq.html">FAQ</a></li>
																				<li><a class="subcategory_item" href="typography.html">Typography</a></li>
																				<li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
																				<li><a class="subcategory_item" href="contact.html">Contact us</a></li>
																				<li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
																			</ul>
																		</div>
																		<div class="col-md-6">
																			<ul class="row-list">
																				<li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
																				<li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
																				<li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
																				<li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/menu/new-icon.png') }}" alt="">Categories</strong>
																<span class="label"></span>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 100%; display: none;">
																<div class="content">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="row">
																				<div class="col-md-3 img img1">
																					<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/cms/img1.jpg') }}" alt="banner1"></a>
																				</div>
																				<div class="col-md-3 img img2">
																					<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/cms/img2.jpg') }}" alt="banner2"></a>
																				</div>
																				<div class="col-md-3 img img3">
																					<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/cms/img3.jpg') }}" alt="banner3"></a>
																				</div>
																				<div class="col-md-3 img img4">
																					<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/cms/img4.jpg') }}" alt="banner4"></a>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Automotive</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Car Alarms and Security</a></li>
																							<li><a href="#"  class="main-menu">Car Audio &amp; Speakers</a></li>
																							<li><a href="#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
																							<li><a href="#"  class="main-menu">More Car Accessories</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Electronics</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Battereries &amp; Chargers</a></li>
																							<li><a href="#"  class="main-menu">Headphones, Headsets</a></li>
																							<li><a href="#"  class="main-menu">Home Audio</a></li>
																							<li><a href="#"  class="main-menu">Mp3 Players &amp; Accessories</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Jewelry &amp; Watches</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Earings</a></li>
																							<li><a href="#"  class="main-menu">Wedding Rings</a></li>
																							<li><a href="#"  class="main-menu">Men Watches</a></li>
																							<li><a href="#"  class="main-menu">Women Watches</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Bags, Holiday Supplies</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Gift &amp; Lifestyle Gadgets</a></li>
																							<li><a href="#"  class="main-menu">Gift for Man</a></li>
																							<li><a href="#"  class="main-menu">Gift for Woman</a></li>
																							<li><a href="#"  class="main-menu">Lighter &amp; Cigar Supplies</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>Accessories</strong>
																
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 100%; display: none;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-md-8">
																			<div class="row">
																				<div class="col-md-6 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#"  class="main-menu">Automotive</a>
																								<ul>
																									<li><a href="#">Car Alarms and Security</a></li>
																									<li><a href="#" >Car Audio &amp; Speakers</a></li>
																									<li><a href="3#" >Gadgets &amp; Auto Parts</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#"  class="main-menu">Smartphone &amp; Tablets</a>
																								<ul>
																									<li><a href="#" >Accessories for i Pad</a></li>
																									<li><a href="#" >Apparel</a></li>
																									<li><a href="#" >Accessories for iPhone</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-md-6 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Sports &amp; Outdoors</a>
																								<ul>
																									<li><a href="#" >Camping &amp; Hiking</a></li>
																									<li><a href="#" >Cameras &amp; Photo</a></li>
																									<li><a href="#" >Cables &amp; Connectors</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#"  class="main-menu">Electronics</a>
																								<ul>
																									<li><a href="#" >Battereries &amp; Chargers</a></li>
																									<li><a href="#" >Bath &amp; Body</a></li>
																									<li><a href="#" >Outdoor &amp; Traveling</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4">
																			<span class="title-submenu">Bestseller</span>
																			<div class="col-sm-12 list-product">
																				<div class="product-thumb">
																					<div class="image pull-left">
																						<a href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/shop/product/35.jpg') }}" width="80" alt="Filet Mign" title="Filet Mign"></a>
																					</div>
																					<div class="caption">
																						<h4><a href="#">Filet Mign</a></h4>
																						<div class="ratings">
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						</div>
																						<p class="price">$88.00</p>
																					</div>
																				</div>
																			</div>
																			<div class="col-sm-12 list-product">
																				<div class="product-thumb">
																					<div class="image pull-left">
																						<a href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/shop/product/W1.jpg') }}" width="80" alt="Dail Lulpa" title="Dail Lulpa"></a>
																					</div>
																					<div class="caption">
																						<h4><a href="#">Dail Lulpa</a></h4>
																						<div class="ratings">
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																						</div>
																						<p class="price">$78.00</p>
																					</div>
																				</div>
																			</div>
																			<div class="col-sm-12 list-product">
																				<div class="product-thumb">
																					<div class="image pull-left">
																						<a href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/shop/product/141.jpg') }}" width="80" alt="Canon EOS 5D" title="Canon EOS 5D"></a>
																					</div>
																					<div class="caption">
																						<h4><a href="#">Canon EOS 5D</a></h4>
																						
																						<div class="ratings">
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																						</div>
																						<p class="price">
																							<span class="price-new">$60.00</span>
																							<span class="price-old">$145.00</span>
																							
																						</p>
																					</div>
																				</div>
																			</div>
																			
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="">
															<p class="close-menu"></p>
															<a href="blog-page.html" class="clearfix">
																<strong>Blog</strong>
																<span class="label"></span>
															</a>
														</li>
														
														<li class="hidden-md color-buy">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>Buy Theme!</strong>
																
															</a>
														</li>
													</ul>
													
												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header center -->
			<!-- Header Bottom -->
			<div class="header-bottom compact-hidden">
				<div class="container">
					<div class="header-bottom-inner">
						<div class="row">
							<div class="header-bottom-left menu-vertical col-md-3 col-sm-2 col-xs-2">
								<div class="responsive so-megamenu megamenu-style-dev">
									<div class="so-vertical-menu no-gutter compact-hidden">
										<nav class="navbar-default">	
											<div class="container-megamenu vertical open">
												<div id="menuHeading">
													<div class="megamenuToogle-wrapper">
														<div class="megamenuToogle-pattern">
															<div class="container">
																<div>
																	<span></span>
																	<span></span>
																	<span></span>
																</div>
																Categories							
																<i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="navbar-header">
													<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
														<span class="icon-bar" style="width: 12px;"></span>
														<span class="icon-bar" style="width: 16px;"></span>
														<span class="icon-bar"></span>
													</button>	
												</div>
												<div class="vertical-wrapper" >
													<span id="remove-verticalmenu" class="fa fa-times"></span>
													<div class="megamenu-pattern">
														<div class="container">
															<ul class="megamenu">
																
                                                                {{-- @foreach ($category_product as $item)
                                                                 
																<li class="item-vertical">
																	<p class="close-menu"></p>
																	<a href="#" class="clearfix">
																		<strong>
																		<span>{{ $item->category_name }}</span>
																		</strong>
																	</a>
																</li>
                                                                @endforeach --}}
																	
																	<li class="loadmore">
																		<i class="fa fa-plus-square-o"></i>
																		<span class="more-view">More Categories</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</nav>
									</div>
								</div>
							</div>
							
							<!-- Main menu -->
							<div class="header-bottom-right col-md-9 col-sm-10 col-xs-10">
								<div class="col-lg-9 col-md-8 col-sm-7 col-xs-9 header_search">
									<!-- Search -->
									<div id="sosearchpro" class="search-pro">
										<form method="GET" action="index.html">
											<div id="search0" class="search input-group">
												<div class="select_category filter_type  icon-select">
													<select class="no-border" name="category_id">
														<option value="0">All Category</option>
														<option value="20">Desktops</option>
														<option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home 9</option>

														<option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home 8</option>

														<option value="18">Laptops &amp; Notebooks</option>
														<option value="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Macs</option>

														<option value="45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows</option>

														<option value="25">Automotive</option>
														<option value="35">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gadgets &amp; Auto Parts</option>

														<option value="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More Car Accessories</option>

														<option value="29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car Alarms and Security</option>

														<option value="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car Audio &amp; Speakers</option>

														<option value="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Printers</option>

														<option value="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanners</option>

														<option value="32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Cameras</option>
														<option value="57">Mobile &amp; Tablet </option>
														<option value="68">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hanet magente</option>

														<option value="69">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Knage unget</option>

														<option value="70">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Latenge mange</option>

														<option value="67">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Punge nenune</option>

														<option value="71">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qunge genga</option>

														<option value="65">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tange manue</option>

														<option value="17">Electronics </option>
														<option value="64">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Angene mafin</option>

														<option value="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Egante mangetes</option>

														<option value="62">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gante extensg</option>

														<option value="61">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guntes magesg</option>

														<option value="66">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rengae manges</option>

														<option value="63">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sine engain</option>

														<option value="33">Apparel</option>
														<option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accessories</option>

														<option value="80">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bags</option>

														<option value="74">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computers</option>

														<option value="72">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Electronics</option>

														<option value="79">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fashion</option>

														<option value="77">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men</option>

														<option value="73">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobiles</option>

														<option value="75">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sports</option>

														<option value="81">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Watches</option>

														<option value="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Women</option>

														<option value="34">Computer</option>
														<option value="43">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camping &amp; Hiking</option>

														<option value="47">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cusen mariot</option>

														<option value="48">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Denta magela</option>

														<option value="55">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Engite nanet</option>

														<option value="44">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Theid cupensg</option>

														<option value="59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verture agoent</option>
													</select>
												</div>	

												<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
												<span class="input-group-btn">
												<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
												</span>
											</div>
											<input type="hidden" name="route" value="product/search" />
										</form>
									</div>
									<!-- //end Search -->
								</div>
								<div class="block-cart">
									<!--cart-->

									<div class="shopping_cart pull-right">
										<div id="cart" class=" btn-group btn-shopping-cart">

                                            
											<a href="{{ url('cart') }}" data-loading-text="Loading..." class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
												<div class="shopcart">
													<span class="handle pull-left"></span>
													
													<span class="text-shopping-cart hidden-xs">	My cart	</span>
													@if(session('cart'))
                                                    <span class="">{{ count(session('cart')) }}</span>
													@endif
													<span class="text-shopping-cart-mobi hidden-lg hidden-md hidden-sm ">
													  <i class="fa fa-cart-plus"></i>
													</span> 
												</div>
											</a>
                                      
											@if(session('cart'))   
                                           
											<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
                                                			
												<li>
													<table class="table table-striped">
														<tbody>

                                                            <?php $total = 0; ?>	
                                                            @foreach(session('cart') as $id => $infos)
                                                            <?php $total += $infos['price'] * $infos['qty'] ; ?>

															<tr>
																<td class="text-center" style="width:70px">
																	<a href="product.html"> <img src="{{ asset('frontend/image/demo/shop/product/').'/'. $infos['image1'] }}" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
																</td>
																<td class="text-left"> <a class="cart_product_name" href="product.html">{{ $infos['name'] }}</a> </td>
																<td class="text-center"> x1 </td>
																<td class="text-center"> ${{ $infos['price'] }} </td>
																<td class="text-right">
																	<a href="product.html" class="fa fa-edit"></a>
																</td>
																<td class="text-right">
																	<a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
																</td>
															</tr>
                                                            @endforeach

														</tbody>
													</table>
												</li>
												<li>
													<div>
														<table class="table table-bordered">
															<tbody>
																<tr>
																	<td class="text-left"><strong>Sub-Total</strong>
																	</td>
																	<td class="text-right">${{ $total }}</td>
																</tr>
																<tr>
																	<td class="text-left"><strong>Eco Tax (-2.00)</strong>
																	</td>
																	<td class="text-right">$2.00</td>
																</tr>
																<tr>
																	<td class="text-left"><strong>VAT (20%)</strong>
																	</td>
																	<td class="text-right">$200.00</td>
																</tr>
																<tr>
																	<td class="text-left"><strong>Total</strong>
																	</td>
																	<td class="text-right">$1,262.00</td>
																</tr>
															</tbody>
														</table>
														<p class="text-center"> <a class="btn view-cart"  href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
													</div>
												</li>
                                              

											</ul>

											@endif

                              

										</div>
									</div>

									<!--//cart-->
								</div>
								<div class="header_custom_link hidden-xs">
									@if (!Auth::check())
									<ul>
										<li><a href="{{ url('login') }}"><i class="fa fa-user"></i> Login</a></li>
									</ul>	
									@endif
										
								</div>
							</div>
							<!-- //end Main menu -->
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- //Header Container  -->

        @yield('content')

        <script type="text/javascript">
			var $typeheader = 'header-home1';
			//-->
		</script>
		<!-- Footer Container -->
		<footer class="footer-container typefooter-1">
			<!-- FOOTER TOP -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="module social_block col-md-3 col-sm-12 col-xs-12" >
								<ul class="social-block ">
									<li class="facebook"><a class="_blank" href="https://www.facebook.com/MagenTech" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a class="_blank" href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li class="rss"><a class="_blank" href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
									<li class="google_plus"><a class="_blank" href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa  fa-google-plus"></i></a></li>
									<li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
							<div class="module news-letter col-md-9 col-sm-12 col-xs-12">
								<div class="newsletter">
									<div class="title-block">
										<div class="page-heading">SIGN UP FOR OUR NEWSLETTER</div>
										<div class="pre-text">
											Duis at ante non massa consectetur iaculis id non tellus			
										</div>
									</div>
									<div class="block_content">
										<form method="post" name="signup" id="signup" class="btn-group form-inline signup">
											<div class="form-group required send-mail">
												<div class="input-box">
													<input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
												</div>
												<div class="subcribe">
													<button class="btn btn-default btn-lg" type="submit" onclick="return subscribe_newsletter();" name="submit">
														Subscribe						</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<!-- FOOTER CENTER -->
			<div class="footer-center">
				<div class="container content">
					<div class="row">
						<!-- BOX INFO -->
						<div class="col-md-3 col-sm-6 col-xs-12 collapsed-block footer-links box-footer">
							<div class="module ">
								<div class="content-block-footer">
									<div class="footer-logo">
										<a href="index.html"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/logos/theme_logo.png') }}" title="Your Store" alt="Your Store" /></a>
									</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
							</div>				
						</div>
						<!-- BOX ACCOUT -->
						<div class="col-md-3 col-sm-6 box-account box-footer">
							<div class="module clearfix">
								<h3 class="modtitle">My Account</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="#">Brands</a></li>
										<li><a href="#">Gift Certificates</a></li>
										<li><a href="#">Affiliates</a></li>
										<li><a href="#">Specials</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- BOX INFOMATION -->
						<div class="col-md-3 col-sm-6 box-information box-footer">
							<div class="module clearfix">
								<h3 class="modtitle">Information</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="#">About Us</a></li>
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Pricing Tables</a></li>
										<li><a href="#">Terms And Conditions</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- BOX ABOUT -->
						<div class="col-md-3  col-sm-6 collapsed-block box-footer">
							<div class="module ">
								<h3 class="modtitle">About Us</h3>
								<div class="modcontent">
									<ul class="contact-address">
										<li><span class="fa fa-home"></span> My Company, 42 avenue des Champs</li>
										<li><span class="fa fa-envelope"></span> Email: <a href="#"> sales@yourcompany.com</a></li>
										<li><span class="fa fa-phone">&nbsp;</span> Phone 1: 0123456789</li>
									</ul>
									<ul class="payment-method">
										<li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/cms/payment/payment-1.png') }}" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/cms/payment/payment-2.png') }}" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/cms/payment/payment-3.png') }}" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/cms/payment/payment-4.png') }}" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/demo/cms/payment/payment-5.png') }}" alt="Payment"></a></li>
									</ul>
								</div>
							</div>				
						</div>
					</div>
				</div>
			</div>		
			<!-- FOOTER BOTTOM -->
			<div class="footer-bottom ">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						Maxshop © 2018 - 2019. MAGENTECH Store. All Rights Reserved.				
						</div>
						<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
					</div>
				</div>
			</div>

		</footer>
		<!-- //end Footer Container -->

    </div>
	<!-- Social widgets -->
	<section class="social-widgets visible-lg">
		<ul class="items">
			<li class="item item-01 facebook"> <a href="php/facebook.php?account=envato" class="tab-icon"><span class="fa fa-facebook"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>FACEBOOK</h5>
					</div>
					<div class="loading">
						<img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/lazy-loader.gif') }}" alt="loader">
					</div>
				</div>
			</li>
			<li class="item item-02 twitter"> <a href="php/twitter.php?account_twitter=envato" class="tab-icon"><span class="fa fa-twitter"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>TWITTER FEEDS</h5> 
					</div>
					<div class="loading">
						<img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/lazy-loader.gif') }}" alt="loader">
					</div>
				</div>
			</li>
			<li class="item item-03 youtube"> <a href="php/youtubevideo.php?account_video=PY2RLgTmiZY" class="tab-icon"><span class="fa fa-youtube"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>YouTube</h5>
					</div>
					<div class="loading"> <img  class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/lazy-loader.gif') }}" alt="loader"></div>
				</div>
			</li>
		</ul>
	</section>	<!-- End Social widgets -->
	
	<!-- Cpanel Block -->
	<div id="sp-cpanel_btn" class="isDown visible-lg">
		<i class="fa fa-cog fa-spin"></i>
	</div>		
	<div id="sp-cpanel" class="sp-delay">
		<h2 class="sp-cpanel-title"> Demo Options <span class="sp-cpanel-close"> <i class="fa fa-times"> </i></span></h2>
		<div id="sp-cpanel_settings">
			<div class="panel-group">
				<label>Color Scheme</label>
				<div class="group-schemes" >
					<a data-scheme="default" title="Orange"  data-toggle="tooltip" class="item_scheme selected"><span style="background: #ea3a3c;"></span></a>
					<a data-scheme="blue" title="Blue"  data-toggle="tooltip" class="item_scheme"><span style="background: #5f87d1;"></span></a>
					<a data-scheme="orange"  title="Orange"  data-toggle="tooltip" class="item_scheme"><span style="background: #F4A137;"></span></a>
					<a data-scheme="cyan" title="Cyan"  data-toggle="tooltip" class="item_scheme"><span style="background: #009688;"></span></a>
					<a data-scheme="green" title="Green" data-toggle="tooltip" class="item_scheme "><span style="background: #20bc5a;"></span></a>
					
				 </div>
			</div>
			
			<div class="panel-group ">
				<label>Header style</label>
				<div class="group-boxed">
					<select id="change_header_type" name="cpheaderstype" class="form-control" onchange="headerTypeChange(this.value);">
						<option value="header-home1" >Header 1</option>
						<option value="header-home2" >Header 2</option>
						<option value="header-home3" >Header 3</option>
						<option value="header-home4" >Header 4</option>
						<option value="header-home5" >Header 5</option>
						<option value="header-home6" >Header 6</option>
						<option value="header-home7" >Header 7</option>
						<option value="header-home8" >Header 8</option>
						<option value="header-home9" >Header 9</option>
						<option value="header-home10" >Header 10</option>
					</select>
				</div>
			</div>
			
			
			<div class="panel-group ">
				<label>Layout Box</label>
				<div class="group-boxed">
					<select id="cp-layoutbox" name="cplayoutbox" class="form-control" onchange="changeLayoutBox(this.value);">
						<option value="full">Wide</option>
						<option value="boxed">Boxed</option>
						<option value="iframed">Iframed</option>
						<option value="rounded">Rounded</option>
					</select>
				</div>
			</div>
			
			<div class="panel-group">
				<label>Body Image</label>
				
				<div class="group-pattern">
					<div data-pattern="28"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/28.png') }}" alt="pattern 28"></div>
					<div data-pattern="29"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/29.png') }}" alt="pattern 29"></div>
					<div data-pattern="30"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/30.png') }}" alt="pattern 30"></div>
					<div data-pattern="31"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/31.png') }}" alt="pattern 31"></div>
					<div data-pattern="32"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/32.png') }}" alt="pattern 32"></div>
					<div data-pattern="33"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/33.png') }}" alt="pattern 33"></div>
					<div data-pattern="34"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/34.png') }}" alt="pattern 34"></div>
					<div data-pattern="35"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/35.png') }}" alt="pattern 35"></div>
					<div data-pattern="36"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/36.png') }}" alt="pattern 36"></div>
					<div data-pattern="37"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/37.png') }}" alt="pattern 37"></div>
					<div data-pattern="38"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/38.png') }}" alt="pattern 38"></div>
					<div data-pattern="39"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/39.png') }}" alt="pattern 39"></div>
					<div data-pattern="40"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/40.png') }}" alt="pattern 40"></div>
					<div data-pattern="41"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/41.png') }}" alt="pattern 41"></div>
					<div data-pattern="42"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/42.png') }}" alt="pattern 42"></div>
					<div data-pattern="43"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/43.png') }}" alt="pattern 43"></div>
					<div data-pattern="44"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/44.png') }}" alt="pattern 44"></div>
					<div data-pattern="45"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/frontend/image/theme/patterns/45.png') }}" alt="pattern 45"></div>
				</div>
				<p class="label-sm">Background only applies for Boxed,Framed, Rounded Layout</p>
			</div>
			
			<div class="reset-group">
				<a href="index.html" class="btn btn-success " onclick="ResetAll()">Reset</a>
			</div>
			
		</div>
	</div>

	<link rel='stylesheet' property='stylesheet'  href="{{ asset('/frontend/css/themecss/cpanel.css') }}" type='text/css' media='all' />
	
	<!-- Preloading Screen -->
	{{-- <div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	 </div> --}}
	<!-- End Preloading Screen -->
	
	<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/frontend/js/owl-carousel/owl.carousel.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/frontend/js/themejs/libs.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/frontend/js/unveil/jquery.unveil.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/frontend/js/countdown/jquery.countdown.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/frontend/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/frontend/js/datetimepicker/moment.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/frontend/js/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/frontend/js/jquery-ui/jquery-ui.min.js') }}"></script>


	<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="{{ asset('/frontend/js/themejs/application.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/frontend/js/themejs/toppanel.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/frontend/js/themejs/so_megamenu.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/frontend/js/themejs/addtocart.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/frontend/js/themejs/cpanel.js') }}"></script>
</body>
</html>