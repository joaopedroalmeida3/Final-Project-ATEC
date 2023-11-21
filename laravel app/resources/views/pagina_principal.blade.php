<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
	<html lang="{{ app()->getLocale() }}">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Guide &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="myfirstpage/layout/css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="myfirstpage/layout/css/flexslider.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="myfirstpage/layout/css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="myfirstpage/layout/css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="myfirstpage/layout/css/bootstrap.css">

	<!--Default Theme Style You can change the style.css (default color purple) to one of these styles-->
	<link rel="stylesheet" href="myfirstpage/layout/css/style.css">



	


	<!-- Modernizr JS -->
	<script src="myfirstpage/layout/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>

	<body>
	
	<!-- Loader -->
	<!--uncomment this for load-->
	<!--div class="fh5co-loader"></div-->
	
	<div id="fh5co-page">
		<section id="fh5co-header">
			<div class="container">
				<nav role="navigation">
				@if(auth::user() && auth::user()->is_admin == 1)
					<ul class="pull-left left-menu">
						<li class="fh5co-cta-btn"><a href="/home">Home</a></li>
					</ul>
					<h1 id="fh5co-logo"><a href="/">guide<span>.</span></a></h1>
					<ul class="pull-right right-menu">
						<li class="fh5co-cta-btn dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								{{ ucfirst (Auth::user()->name) }} <span class="caret"></span>
							</a>

							<ul class="dropdown-menu" role="menu">
								<li class="fh5co-cta-btn">
									<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
										Logout
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
                    </ul>
				@else
					<ul class="pull-right right-menu">
						<li><a href="/login">Login</a></li>
					</ul>
					<h1 id="fh5co-logo"><a href="/">guide<span>.</span></a></h1>
					
					<ul class="pull-left left-menu">
						<li><a href="">Home</a></li>
					</ul>
				@endif
				</nav>
			</div>
		</section>
		<!-- #fh5co-header -->
		<section id="fh5co-hero" class="js-fullheight" style="background-image: url(images/hero_bg.jpg);" data-next="yes">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="fh5co-intro js-fullheight">
					<div class="fh5co-intro-text">
						<!-- 
							INFO:
							Change the class to 'fh5co-right-position' or 'fh5co-center-position' to change the layout position
							Example:
							<div class="fh5co-right-position">
						-->
						<div class="fh5co-left-position">
							<h2 class="animate-box">Create Awesome Things for Better Web</h2>
							
						</div>
					</div>
				</div>
			</div>
			<div class="fh5co-learn-more animate-box">
				<a href="#" class="scroll-btn">
					<span class="text">Explore more about us</span>
					<span class="arrow"><i class="icon-chevron-down"></i></span>
				</a>
			</div>
		</section>
		<!-- END #fh5co-hero -->

		<section id="fh5co-features-2">
			<div class="container">
				<div class="col-md-6 col-md-push-6">
					<figure class="fh5co-feature-image animate-box">
						<img src="images/macbook.png" alt="Free HTML5 Bootstrap Template by FREEHTML5.co">
					</figure>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<span class="fh5co-label animate-box">See Features</span>
					<h2 class="fh5co-lead animate-box">Superb Features</h2>
					<div class="fh5co-feature">
						<div class="fh5co-icon animate-box"><i class="icon-check2"></i></div>
						<div class="fh5co-text animate-box">
							<h3>Beautiful Typography</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>
					<div class="fh5co-feature">
						<div class="fh5co-icon animate-box"><i class="icon-check2"></i></div>
						<div class="fh5co-text animate-box">
							<h3>Eco Friendly</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>
					<div class="fh5co-feature">
						<div class="fh5co-icon animate-box"><i class="icon-check2"></i></div>
						<div class="fh5co-text animate-box">
							<h3>Wide and Boxed</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>

					<div class="fh5co-btn-action animate-box">
						<a href="#" class="btn btn-primary btn-cta">More Features</a>
					</div>

				</div>
			</div>
		</section>
		<!-- END #fh5co-features-2 -->
		

		
		<section id="fh5co-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">Starter</h2>
						<div class="price"><sup class="currency">$</sup>7<small>/mo</small></div>
						<p>Basic customer support for small business</p>
						<hr>
						<ul class="pricing-info">
							<li>10 projects</li>
							<li>20 Pages</li>
							<li>20 Emails</li>
							<li>100 Images</li>
						</ul>
						<a href="#" class="btn btn-default btn-sm">Get started</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">Regular</h2>
						<div class="price"><sup class="currency">$</sup>19<small>/mo</small></div>
						<p>Basic customer support for small business</p>
						<hr>
						<ul class="pricing-info">
							<li>15 projects</li>
							<li>40 Pages</li>
							<li>40 Emails</li>
							<li>200 Images</li>
						</ul>
						<a href="#" class="btn btn-default btn-sm">Get started</a>
					</div>
				</div>
				<div class="clearfix visible-sm-block"></div>
				<div class="col-md-3 col-sm-6 animate-box">
					<div class="price-box popular">
						<div class="popular-text">Best value</div>
						<h2 class="pricing-plan">Plus</h2>
						<div class="price"><sup class="currency">$</sup>79<small>/mo</small></div>
						<p>Basic customer support for small business</p>
						<hr>
						<ul class="pricing-info">
							<li>Unlimitted projects</li>
							<li>100 Pages</li>
							<li>100 Emails</li>
							<li>700 Images</li>
						</ul>
						<a href="#" class="btn btn-primary btn-sm">Get started</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">Enterprise</h2>
						<div class="price"><sup class="currency">$</sup>125<small>/mo</small></div>
						<p>Basic customer support for small business</p>
						<hr>
						<ul class="pricing-info">
							<li>Unlimitted projects</li>
							<li>Unlimitted Pages</li>
							<li>Unlimitted Emails</li>
							<li>Unlimitted Images</li>
						</ul>
						<a href="#" class="btn btn-default btn-sm">Get started</a>
					</div>
				</div>
				
				</div>
			</div>
		</section>
		<!-- END #fh5co-subscribe -->

		<footer id="fh5co-footer">
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<h3>Company</h3>
							<ul class="fh5co-links">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Feature Tour</a></li>
								<li><a href="#">Pricing</a></li>
								<li><a href="#">Team</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<h3>Support</h3>
							<ul class="fh5co-links">
								<li><a href="#">Knowledge Base</a></li>
								<li><a href="#">24/7 Call Support</a></li>
								<li><a href="#">Video Demos</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<h3>Contact Us</h3>
							<p>
								<a href="mailto:info@freehtml5.co">info@freehtml5.co</a> <br>
								198 West 21th Street, <br>
								Suite 721 New York NY 10016 <br>
								<a href="tel:+123456789">+12 34  5677 89</a>
							</p>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<h3>Follow Us</h3>
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-google-plus"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
								<li><a href="#"><i class="icon-youtube-play"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				
			</div>
			<div class="fh5co-copyright animate-box">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="fh5co-left"><small>&copy; 2016 <a href="index.html">Guide</a> free html5. All Rights Reserved.</small></p>
							<p class="fh5co-right"><small class="fh5co-right">Designed by <a href="http://freehtml5.co" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.com" target="_blank">Unsplash</a></small></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- END #fh5co-footer -->
	</div>
	<!-- END #fh5co-page -->
	
	
	<!-- jQuery -->
	<script src="myfirstpage/layout/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="myfirstpage/layout/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="myfirstpage/layout/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="myfirstpage/layout/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="myfirstpage/layout/js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="myfirstpage/layout/js/jquery.magnific-popup.min.js"></script>
	<script src="myfirstpage/layout/js/magnific-popup-options.js"></script> 


	<!-- Main JS (Do not remove) -->
	<script src="myfirstpage/layout/js/main.js"></script>

	

	</body>
</html>

