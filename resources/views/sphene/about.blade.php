@extends('sphene.partials.layout')

@section('header')
	@include('sphene.partials.header-sub')
@stop

@section('meta-csrf')
	<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="container margin-top-60" id="app">
	<div class="row">
		
		<!-- Intro text -->
		<div class="col-md-8">
			<p class="about-me-intro margin-top-20">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation towards a streamlined cloud solution.</p>
		</div>

		<!-- Intro buttons -->
		<div class="col-md-4 margin-top-50">
			<a href="" class="button medium border margin-bottom-10">Our Services</a>
			<a href="#" class="button medium">Contact Us</a>
		</div>

	</div>
</div>


<!-- Full Width Icons -->
<div class="full-width-box-container flex margin-top-70">

	<!-- Icon Container -->
	<div class="full-width-box-content alt image-bg" data-background-image="images/about-01a.jpg"></div>

	<!-- Icon Container -->
	<div class="full-width-box-content alt dark-text" data-background-color="#f6f6f6">
		<div class="content-alignment">
			<div class="box-content">
				<h3><strong>Who We Are?</strong></h3>
				<p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail.</p>
			</div>
		</div>
	</div>

	<!-- Icon Container -->
	<div class="full-width-box-content alt image-bg" data-background-image="images/about-01b.jpg"></div>

</div>
<!-- Full Width Icons / End -->


<!-- Full Width Icons -->
<div class="full-width-box-container flex">

	<!-- Icon Container -->
	<div class="full-width-box-content alt light-text" data-background-color="#262626">
		<div class="content-alignment">
			<div class="box-content">
				<h3><strong>Our Mission</strong></h3>
				<p>Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures</p>
			</div>
		</div>
	</div>


	<!-- Icon Container -->
	<div class="full-width-box-content alt image-bg" data-background-image="images/about-01c.jpg"></div>

	<!-- Icon Container -->
	<div class="full-width-box-content alt light-text" data-background-color="#44b272">
		<div class="content-alignment">
			<div class="box-content">
				<h3><strong>Our Approach </strong></h3>
				<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.</p>
			</div>
		</div>
	</div>

</div>
<!-- Full Width Icons / End -->


@stop