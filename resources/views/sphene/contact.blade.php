@extends('sphene.partials.layout')

@section('header')
	@include('sphene.partials.header-sub')
@stop

@section('content')
	<!-- Contact
================================================== -->
<div class="container" id="app" >
     <div class="row" >
          <contact></contact>
          <div class="col-md-5 margin-left-50 martin-top-40" id="">
               <h3 class="margin-bottom-25 margin-top-65">Contact Details</h3>
		<p>We would love to work with you on your next project.  Please contact us and let us know how we can help.</p>

		<div class="sidebar-textbox">
			<ul class="contact-details">
				<li><i class="ln ln-icon-Phone-2"></i> <strong>Phone:</strong> <span>(717) 977-3306 </span></li>
				<li><i class="ln ln-icon-Globe"></i> <strong>Web:</strong> <span><a href="#">www.131Studios.com</a></span></li>
				<li><i class="ln ln-icon-Envelope"></i> <strong>E-Mail:</strong> <span><a href="#">contact@131studios.com</a></span></li>
			</ul>
		</div>
		<h3>Project Details</h3>
		<p>If you would like to give us a little more information regarding your needs please use our expanded contact form <a href="/longform">here.</a></p>
        </div> <!-- col-md-6 -->
     </div> <!-- row -->
</div> <!-- container -->
@stop