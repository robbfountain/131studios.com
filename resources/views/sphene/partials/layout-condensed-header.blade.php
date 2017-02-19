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
 @yield('meta-csrf','')
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

<script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>
</script>

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
<div id="header-container" data-background="images/contact-parallax-02.jpg" data-color="#303133" data-color-opacity="0.7">

	<div id="main-header">
	<div class="container">

		<div class="row">
			<div class="header">

				<div class="col-md-2 col-sm-12">
					<div id="logo" class="margin-top-25">
						<a href="index.html"><img src="images/logo.png" alt=""></a>
					</div>
				</div>

				<!-- Search Form -->
				<div class="search-container">
			      	<form action="#" method="get">
			      		<input type="text" name="s" id="s" onblur="if(this.value=='')this.value='to search type and hit enter';" onfocus="if(this.value=='to search type and hit enter')this.value='';" value="to search type and hit enter" />
			      	</form>
			      	<div class="close-search"><a class="sl sl-icon-close" href="#"></a></div>
				</div>

					<div class="col-md-10 col-sm-12">

					<!-- Mobile Navigation -->
					<div class="menu-responsive">
						<i class="fa fa-reorder menu-trigger"></i>
						<i class="fa fa-search search-trigger"></i>
				      	<form action="#" method="get" class="responsive-search">
				      		<input type="text" onblur="if(this.value=='')this.value='to search type and hit enter';" onfocus="if(this.value=='to search type and hit enter')this.value='';" value="to search type and hit enter" />
				      	</form>
					</div>
					
					<!-- Main Navigation -->
					<nav id="navigation">

						<ul class="menu alt2" id="responsive">

							<li >
								<a href="/">Home</a>
							</li>

							<li>
								<a href="/about">About</a>
							</li>

							<li ><a href="/services">Services</a></li>

							<li>
								<a href="/work" class="current">Projects</a>
							</li>

							<li><a href="/contact">Contact</a></li>
						</ul>
					</nav>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
	</div>

<!-- Titlebar
================================================== -->
<div id="titlebar" class=" margin-bottom-0  centered">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Let's Make A Project</h2>
			</div>
		</div>
	</div>
</div>

</div>
<div class="clearfix"></div>



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
<script type="text/javascript" src="js/sweetalert-dev.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</div>
<!-- Wrapper / End -->

</body>
</html>