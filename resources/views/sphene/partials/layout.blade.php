<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<head>
<link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
<link rel="manifest" href="/images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title></title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/all.css" id="colors">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>

<!-- Page Loader -->
<div id="loader-wrapper">
	<div id="loader"></div>
</div>

<!-- Wrapper -->
<div id="wrapper">


<!-- Header
================================================== -->
<div id="main-header" class="fullscreen-nav">
	<div class="container">

		<div class="row">
			<div class="header">

				<div class="col-md-2 col-sm-4">
					<div id="logo" class="margin-top-25">
						<a href="index.html"><img src="images/logo-image-55x55.png" class="img-thumbnail img-circle"></a>
					</div>
				</div>

				<div class="col-md-10 col-sm-8">

					<!-- Trigger Navigation -->
					<div class="fullscreen-nav-trigger">
						<span class="fullscreen-nav-trigger-box">
							<span class="fullscreen-nav-trigger-inner"></span>
						</span>
					</div>
					
					<!-- Menu -->
					<nav class="fullscreen-nav-container" data-nav-bg-color="#1b3990" data-nav-bg-opacity="0.96">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/about">About</a></li>
							<li><a href="/services">Services</a></li>
							<li><a href="/work">Projects</a></li>
							<li><a href="/contact">Contact</a></li>
						</ul>
					</nav>

				</div>
				<div class="clearfix"></div>

			</div>
		</div>

	</div>
</div>


<!--  Background -->
<div class="fullscreen video background" data-color="#1b3990" data-color-opacity="0.92">

	<section poster="images/code.jpg" id="bgvid">
		
	</section>

    <div class="parallax-content-container">
        <div class="parallax-content">
        	<img class=" " src="images/logo-hero.png">
        	<h2>131 Studios</h2>
        	<h3>Web Developoment &amp; IT Consulting</h3>
           	<div class="scroll-to-content ln ln-icon-Down-3"></div>
        </div>
    </div>

</div>
<!--  Background / End  -->


<!-- Content
================================================== -->

@yield('content')

<!-- Footer
================================================== -->


<div id="footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<h4>About Us</h4>
				<p>131 Studios is a Web Development and IT Consulting company in Pennsylvania. We specialize in writing top-notch web applications as well as offer superb IT consulting services.</p> <p> We have over 15 years of experience providing high level products and services.</p>
				<a href="#" class="button social-btn"><i class="fa fa-facebook-official"></i> Like Us on Facebook</a>
			</div>

			<div class="col-md-4  col-sm-6">
				<h4>Helpful Links</h4>
				<ul class="footer-links">
					<li><a href="/about">About Us</a></li>
					<li><a href="/services">Services</a></li>
					<li><a href="/work">Work</a></li>
					
				</ul>

				<ul class="footer-links">
					<li><a href="/news">In the News</a></li>
					<li><a href="/privacy">Privacy Policy</a></li>
					<li><a href="/terms">Terms of Service</a></li>
					
				</ul>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>P.O. Box 704 | Greencastle | PA | 17225</span> <br>
					Phone: <span>(717) 977-3306 </span><br>
					E-Mail:<span> contact@131studios.com </span><br>
				</div>
			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">©  Copyright 2017 by <a href="#">{{env('COMPANY_NAME')}}</a>. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/counterup.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.sticky-kit.min.js"></script>
<script type="text/javascript" src="js/jquery.twentytwenty.js"></script>
<script type="text/javascript" src="js/jquery.event.move.js"></script>
<script type="text/javascript" src="js/jquery.photogrid.js"></script>
<script type="text/javascript" src="js/jquery.tooltips.min.js"></script>
<script type="text/javascript" src="js/jquery.pricefilter.js"></script>
<script type="text/javascript" src="js/jquery.stacktable.js"></script>
<script type="text/javascript" src="js/jquery.contact-form.js"></script>
<script type="text/javascript" src="js/jquery.jpanelmenu.js"></script>
<script type="text/javascript" src="js/headroom.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/puregrid.js"></script>
<script type="text/javascript" src="js/flexibility.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</div>
<!-- Wrapper / End -->

</body>
</html>