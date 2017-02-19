@extends('sphene.partials.layout')

@section('content')
<!-- Featured Services -->
<div class="container margin-bottom-80">
	<div class="row margin-top-80">	
		
		<div class="col-md-4 col-sm-12">
			<div class="icon-box-3 rounded light">
				<i class="ln ln-icon-Code-Window"></i>
				<h4>Web Development</h4>
				<p>Pellentesque habitant morbi tristique senectus netus ante et malesuada fames ac turpis egestas maximus neque.</p>
			</div>
		</div>

		<div class="col-md-4 col-sm-12">
			<div class="icon-box-3  rounded light">
				<i class="ln ln-icon-Support"></i>
				<h4>IT Consulting</h4>
				<p>Nunc ultricies porttitor est, ut rutrum ante. Vivamus interdum sodales sem. In  lorem ipsum ultrices augue eget.</p>
			</div>
		</div>

		<div class="col-md-4 col-sm-12">
			<div class="icon-box-3 rounded light">
				<i class="ln  ln-icon-Server"></i>
				<h4>Hosting &amp; Maintenance</h4>
				<p>Pellentesque habitant morbi tristique senectus netus ante et malesuada fames ac turpis egestas maximus.</p>
			</div>
		</div>

	</div>
</div>
<!-- Featured Services / End -->

<!-- Infobox -->
<div class="info-banner-fw margin-bottom-80">
	<div class="container">
		<div class="row">
			<div class="col-md-12">Hire us for your next project <a href="/contact">Contact Us</a></div>
		</div>
	</div>
</div>

<div class="full-width container portfolio-container margin-bottom-80">
	<div class="container" >
		<div class="row">
			<div class="col-md-12">

				<!-- Headline -->
				<h3 class="headline centered margin-top-45 margin-bottom-35">Recent Work</h3>

			</div>
		</div>

		<!-- Projects -->
		<div class="projects gutter style-4 isotope-wrapper">

			<div class="isotope-sizer"></div>
			
			<div class="owl-carousel" >
			     
			<!-- Item -->
			<div class=" print">
				<a href="#">
					<img src="images/project-01.jpg" alt="">
					<div class="overlay">
						<div class="overlay-content">
							<h4>Food Branding</h4>
							<span>Nice Title Here</span>
						</div>
					</div>
				</a>
			</div>

			<!-- Item -->
			<div class="print">
				<a href="single-project-creative-style-1.html">
					<img src="images/project-02.jpg" alt="">
					<div class="overlay">
						<div class="overlay-content">
							<h4>Bilboard</h4>
							<span>February 2016</span>
						</div>
					</div>
				</a>
			</div>

			<!-- Item -->
			<div class="identity">
				<a href="http://google.pl">
					<img src="images/project-03.jpg" alt="">
					<div class="overlay">
						<div class="overlay-content">
							<h4>Coffee Cup</h4>
							<span>January 2016</span>
						</div>
					</div>
				</a>
			</div>

			<!-- Item -->
			<div class="identity">
				<a href="single-project-creative-style-1.html">
					<img src="images/project-04.jpg" alt="">
					<div class="overlay">
						<div class="overlay-content">
							<h4>Wall Sign</h4>
							<span>December 2016</span>
						</div>
					</div>
				</a>
			</div>

			<!-- Item -->
			<div class="print other">
				<a href="single-project-content-right.html">
					<img src="images/project-05.jpg" alt="">
					<div class="overlay">
						<div class="overlay-content">
							<h4>Sketches</h4>
							<span>November 2015</span>
						</div>
					</div>
				</a>
			</div>

			<!-- Item -->
			<div class="other">
				<a href="single-project-content-right.html">
					<img src="images/project-06.jpg" alt="">
					<div class="overlay">
						<div class="overlay-content">
							<h4>Mobile App</h4>
							<span>November 2015</span>
						</div>
					</div>
				</a>
			</div>

			<!-- Item -->
			<div class="print">
				<a href="single-project-content-right.html">
					<img src="images/project-07.jpg" alt="">
					<div class="overlay">
						<div class="overlay-content">
							<h4>Magazine</h4>
							<span>September 2015</span>
						</div>
					</div>
				</a>
			</div>

			<!-- Item -->
			<div class="identity">
				<a href="single-project-content-right.html">
					<img src="images/project-08.jpg" alt="">
					<div class="overlay">
						<div class="overlay-content">
							<h4>Wall Sign</h4>
							<span>November 2015</span>
						</div>
					</div>
				</a>
			</div>
			
			<!-- Item -->
			<div class="identity print">
				<a href="single-project-content-right.html">
					<img src="images/project-09.jpg" alt="">
					<div class="overlay">
						<div class="overlay-content">
							<h4>Shopping Bag</h4>
							<span>November 2015</span>
						</div>
					</div>
				</a>
			</div>	
			</div> <!-- owl-carousel owl-theme -->
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="clearfix"></div>

<br>
<br>

<!-- Logos -->
<div class="container logo-container full-width margin-top-80">

	<div class="col-md-12" >
	     <!-- Headline -->
				<h3 class="headline centered margin-top-45 margin-bottom-35">Platforms We Use</h3>
	</div> <!-- col-md-12 -->
	<!-- Logos -->
	<div class="row margin-top-20 margin-bottom-20 ">
		<div class="col-md-12">
			<ul class="logos">
			    <li><img src="images/logos/laravel.png" alt="Laravel" /></li>
			    <li><img src="images/logos/digital-ocean.png" alt="Digital Ocean" /></li>
			    <li><img src="images/logos/php.png" alt="PHP" /></li>
			    <li><img src="images/logos/forge.png" alt="Laravel Forge" /></li>
			   	<li ><img src="images/logos/vue.png" alt="Vue JS"></li>
			   	<li ><img src="images/logos/jquery-logo.png"></li>
			</ul>
		</div>
	</div>
</div>
<!-- Logos / End -->


@stop