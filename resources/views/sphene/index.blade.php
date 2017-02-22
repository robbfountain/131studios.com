@extends('sphene.partials.layout')

@section('header')
	@include('sphene.partials.header-main')
@stop

@section('content')
<!-- Featured Services -->
<div class="container margin-bottom-80">
	<div class="row margin-top-80">	
		
		<div class="col-md-3 col-sm-12">
			<div class="icon-box-3 rounded light">
				<i class="ln ln-icon-Code-Window"></i>
				<h4>Web Development</h4>
				<p>Custom backend development, Content Management Systems and SaaS applications are just some of the development works we have done...</p>
			</div>
		</div>

		<div class="col-md-3 col-sm-12">
			<div class="icon-box-3  rounded light">
				<i class="ln ln-icon-Support"></i>
				<h4>IT Consulting</h4>
				<p>SoHo IT Solutions for your business. Server &amp; worstation management, patching, security and software management are just some of the consulting services we offer.</p>
			</div>
		</div>

		<div class="col-md-3 col-sm-12">
			<div class="icon-box-3 rounded light">
				<i class="ln  ln-icon-Server"></i>
				<h4>Hosting &amp; Maintenance</h4>
				<p>We offer powerful VPS hosting systems for your website and we take care of everything from server maintenance to application deployment.</p>
			</div>
		</div>

		<div class="col-md-3 col-sm-12">
			<div class="icon-box-3 rounded light">
				<i class="ln ln-icon-Paintbrush"></i>
				<h4>Web Design</h4>
				<p>We can give your website a new look with modern touches.  We partner with top notch graphics artists for one-of-a-kind web sites.</p>
			</div>
		</div>

	</div>
</div>
<!-- Featured Services / End -->

<!-- Infobox -->
<div class="info-banner-fw margin-bottom-80">
	<div class="container">
		<div class="row">
			<div class="col-md-12">Hire us for your next project <a href="/longform">Contact Us</a></div>
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

			@foreach($projects as $project)
				<!-- Item -->
				<div class="">
					<a href="/projects/{{$project->slug}}">
						<img src="{{$project->primary_image}}" alt="">
						<div class="overlay">
							<div class="overlay-content">
								<h4>{{$project->title}}</h4>
								<span>{{$project->sub_title}}</span>
							</div>
						</div>
					</a>
				</div>
			@endforeach
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
			   	<li ><img src="images/logos/jQuery-Logo.png"></li>
			</ul>
		</div>
	</div>
</div>
<!-- Logos / End -->


@stop