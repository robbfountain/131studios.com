@extends(env('THEME').'.partials.layout')

@section('header')
	@include(env('THEME').'.partials.header-sub')
@stop

@section('content')
<div class="container margin-top-50" >
     <div class="col-md-12" id="">
          {!! $page->content !!}
     </div> <!-- col-md-12 -->
     
</div> <!-- container -->
	
@stop