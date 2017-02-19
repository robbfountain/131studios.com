@extends('sphene.partials.layout-condensed-header')

@section('meta-csrf')
	<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
	<!-- Contact
================================================== -->
<div class="container" id="app" >

     <div class="row" >
          <contact></contact>
          <div class="col-md-5 margin-left-50 martin-top-40" id="">
               <h3 class="margin-bottom-25 margin-top-65">Contact Details</h3>
		<p>Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services.</p>

		<div class="sidebar-textbox">
			<ul class="contact-details">
				<li><i class="ln ln-icon-Phone-2"></i> <strong>Phone:</strong> <span>(717) 977-3306 </span></li>
				<li><i class="ln ln-icon-Globe"></i> <strong>Web:</strong> <span><a href="#">www.example.com</a></span></li>
				<li><i class="ln ln-icon-Envelope"></i> <strong>E-Mail:</strong> <span><a href="#">contact@131studios.com</a></span></li>
			</ul>
		</div>
		<h3>Project Details</h3>
		<p>If you would like to give us a little more information regarding your needs please use our expanded contact form <a href="/contact/longform">here.</a></p>
        </div> <!-- col-md-6 -->
     </div> <!-- row -->
</div> <!-- container -->
@stop