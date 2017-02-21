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
<div class="image-edge margin-top-70" >

	<div class="image-edge-content">
		<h2>Whatever We Start, We Think Through To The End</h2>
		<br>
		<p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.  </p>
		<br>
		<a href="about-us.html" class="button border medium margin-bottom-40">Read More</a>
	</div>

	<div class="edge-bg" data-background-image="images/service-02a.jpg"></div>

</div>
<!-- Image Edge / End -->

<!-- Image Edge -->
<div class="image-edge left dark margin-top-0" >

	<div class="image-edge-content">
		<h2>Everybody Gets Exactly What They Need</h2>
		<br>
		<p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation.</p>
		<br>
		<a href="services-classic.html" class="button border medium margin-bottom-40">Read More</a>
	</div>

	<div class="edge-bg" data-background-image="images/service-02c.jpg"></div>

</div>
<!-- Image Edge / End -->
<!-- Image Edge / End -->

</div> <!-- container -->
@stop