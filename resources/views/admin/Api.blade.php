@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            API <small>Remote API Keys for Client Services</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">API</li>
        </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <passport-personal-access-tokens></passport-personal-access-tokens>
        </div>
    </div>
@endsection
