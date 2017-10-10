@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            Portal Data
            <small>Data for registered portals</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a>
            </li>
            <li class="active">Portals</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped display">
                        <thead>
                        <tr>
                            <th>Client</th>
                            <th>Portal</th>
                            <th>Month</th>
                            <th>Users</th>
                            <th>Files</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{$item->portal->client->name}}</td>
                                <td>{{$item->portal->url}}</td>
                                <td>{{$item->time_period}}</td>
                                <td>{{$item->data['users']}}</td>
                                <td>{{$item->data['total_files']}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

