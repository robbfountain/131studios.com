@extends('backpack::base.layout')

@section('header')
    <section class="content-header">
        <h1>
            Clients
            <small> Clients</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
            <li><a href="{{ backpack_url() }}/clients">Clients</a></li>
            <li class="active">List</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <div class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length">
                                    <label>
                                        <select name="records_per_page" class="form-control input-sm"
                                                v-on:change="limit">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="-1">All</option>
                                        </select> Records per page
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="dataTables_filter text-right">
                                    <label>Search
                                        <input type="search" class="form-control input-sm">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover display">
                            <thead>
                            <tr>
                                <th>Client</th>
                                <th>Contact Name</th>
                                <th>Contact Email</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->contacts[0]->first_name}} {{$client->contacts[0]->last_name}}</td>
                                    <td>{{$client->contacts[0]->email}}</td>
                                    <td>
                                        @if(App\User::isClient($client->id))
                                            <a href="/admin/user/{{App\User::byClient($client->id)->first()->id}}/edit"
                                               class="btn btn-xs btn-default"><i
                                                        class="fa fa-user"></i> View Account</a>
                                        @else
                                            <a href="{{route('client.store',$client->id)}}"
                                               class="btn btn-xs btn-success"><i class="fa fa-user-plus"></i> Create
                                                Account</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Client</th>
                                <th>Contact Name</th>
                                <th>Contact Email</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
