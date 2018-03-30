@extends('frontend.partials.layout')

@section('header')
	@include('frontend.partials.header-sub')
@stop

@section('content')
	<!-- Contact
================================================== -->
<div class="container" id="app" >
     <div class="row" >
         <div class="col-md-12">
             <h2>Tell us about your project.</h2>
             <p>Fill out the form below and tell us a little bit about your needs.  We will review your entry and contact you within a day or two.</p>
         </div>
          <longform></longform>
     </div> <!-- row -->
</div> <!-- container -->
@stop