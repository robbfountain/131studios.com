@extends('sphene.partials.layout')

@section('header')
	@include('sphene.partials.header-sub')
@stop

@section('content')
<div class="container margin-top-60" id="app">
	<div class="row">
		
		<!-- Intro text -->
		<div class="col-md-8">
			<p class="about-me-intro margin-top-20">131 Studios is Web Development and IT consulting company based in Greencastle, Pennsylvania.  We produce high-quality websites, custom applications and customize IT services for your business.</p>
		</div>

		<!-- Intro buttons -->
		<div class="col-md-4 margin-top-50">
			<a href="/services" class="button medium border margin-bottom-10">Our Services</a>
			<a href="/longform" class="button medium">Contact Us</a>
		</div>

	</div>
</div>


<!-- Full Width Icons -->
<div class="full-width-box-container flex margin-top-70">

	<!-- Icon Container -->
	<div class="full-width-box-content alt image-bg" data-background-image="/uploads/About/about-team.jpg"></div>

	<!-- Icon Container -->
	<div class="full-width-box-content alt dark-text" data-background-color="#f6f6f6">
		<div class="content-alignment">
			<div class="box-content">
				<h3><strong>Who We Are</strong></h3>
				<p>We have been in in the web development and IT industry for 15 years. We have a wide range of knowledge of leading industry trends and can help you with your web and IT needs.</p>
			</div>
		</div>
	</div>

	<!-- Icon Container -->
	<div class="full-width-box-content alt image-bg" data-background-image="/uploads/About/maze.jpg"></div>

</div>
<!-- Full Width Icons / End -->


<!-- Full Width Icons -->
<div class="full-width-box-container flex">

	<!-- Icon Container -->
	<div class="full-width-box-content alt light-text" data-background-color="#262626">
		<div class="content-alignment">
			<div class="box-content">
				<h3><strong>Our Mission</strong></h3>
				<p>Our mission is to simplify your business' web presence and IT infrustructure allowing you to focus on what matters most to you...your business.</p>
			</div>
		</div>
	</div>


	<!-- Icon Container -->
	<div class="full-width-box-content alt image-bg" data-background-image="/uploads/About/mission.jpg"></div>

	<!-- Icon Container -->
	<div class="full-width-box-content alt light-text" data-background-color="#44b272">
		<div class="content-alignment">
			<div class="box-content">
				<h3><strong>Our Approach </strong></h3>
				<p>Develop rich applications customized to our client's needs.</p>
			</div>
		</div>
	</div>

</div>
<!-- Full Width Icons / End -->


@stop