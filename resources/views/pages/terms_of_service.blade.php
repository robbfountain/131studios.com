@extends(env('THEME').'.partials.layout')

@section('header')
	@include(env('THEME').'.partials.header-sub')
@stop

@section('content')
	{!! $page !!}
@stop