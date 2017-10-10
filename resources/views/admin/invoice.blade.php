@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            Invoices
            <small>Invoice Generation For Client Portals</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a>
            </li>
            <li class="active">Invoices</li>
        </ol>
    </section>
@endsection


@section('content')
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Authorize Freshbooks
            </div>
            <div class="panel-body">
                <a href="https://my.freshbooks.com/service/auth/oauth/authorize?client_id=1bd1014b609316acba0fcd892568509652ce1db72e385794ec9159de8e7c36d4&response_type=code&redirect_uri=https://131studios.dev:8000/auth/freshbooks/redirect" class="btn btn-success">Authorize Freshbooks</a>
            </div>
        </div>
    </div>
@endsection
