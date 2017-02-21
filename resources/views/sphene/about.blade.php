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
<div class="container" id="app" >

     <div class="row" >
    	<div class="col-md-12" >
    	     <h2>About Us</h2>
    	</div> <!-- col-md-12 -->
     </div> <!-- row -->
</div> <!-- container -->
@stop