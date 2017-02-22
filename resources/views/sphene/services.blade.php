@extends('sphene.partials.layout')

@section('header')
	@include('sphene.partials.header-sub')
@stop

@section('meta-csrf')
	<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
	<!-- Contact
================================================== -->
<div class="container" id="app">
     <div class="row" >
    	<!-- Text Block -->
		<div class="col-md-12 text-center">
			<h3 class="service-intro margin-bottom-25"><strong>We are your solution for your web and IT needs.</strong></h3>
			<p>We offer a wide range of services for your business.  We have over 15 years of web application development and can write custom applications to increase your productivity and maximize profits.  From user-friendly content managements systems, social media management, blogging systems and more, we can create a custom web application for your business.  </p>

			<p>Hosting your website is a breeze.  We handle everything.  We use powerful virtual private servers which allow us to maximize resources while reducing costs.  Hosting plans start at $15.00 / month.</p>

			<p>Additionally we offer local IT consulting services for small and home-based businesses.  We can source, manage and administer your servers, workstations and network equipment so you only have to focus on your business.  </p>
		</div>	
     </div> <!-- row -->
</div>
     <!-- Image Edge -->
<div class="image-edge margin-top-50" >

	<div class="image-edge-content">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="icon-box-1">
					<i class="ln ln-icon-Code-Window"></i>
					<h4>Web Development</h4>
					<p>Custom backend development, Content Management Systems and SaaS applications are just some of the development works we have done.</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="icon-box-1">
					<i class="ln ln-icon-Support"></i>
					<h4>IT Consulting</h4>
					<p>SoHo IT Solutions for your business. Server &amp; worstation management, patching, security and software management are just some of the consulting services we offer.</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="icon-box-1">
					<i class="ln ln-icon-Server"></i>
					<h4>Hosting &amp; Maintenance</h4>
					<p>We offer powerful VPS hosting systems for your website and we take care of everything from server maintenance to application deployment. </p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="icon-box-1">
					<i class="ln ln-icon-Paintbrush"></i>
					<h4>Web Design</h4>
					<p>We can give your website a new look and modern touches.  We partner with top notch graphics artists for one-of-a-kind web sites.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="edge-bg" data-background-image="images/service-02c.jpg"></div>

</div>
<!-- Image Edge / End -->

</div> <!-- container -->
@stop