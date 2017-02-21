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
          <longform></longform>
     </div> <!-- row -->
</div> <!-- container -->
@stop