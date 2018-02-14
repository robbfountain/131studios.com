@extends('frontend.partials.layout')

@section('header')
    @include('frontend.partials.header-sub')
@stop

@section('content')
    <div class="container" id="app">
        <div class="row sticky-wrapper margin-top-50">

            <!-- Photos -->
            <div class="col-md-8">
                <div class="project-photos">
                    <a href="#" title="{{$project->primary_image}}" class="mfp-gallery img-hover"><img
                                src="/{{$project->primary_image}}" alt=""></a>
                </div>
            </div>

            <!-- Content -->
            <div class="col-md-4">
                <div class="project-details right-side">
                    <h4 class="headline">Project Description</h4>
                    <p>{!!$project->description!!}</p>

                    <ul class="details">
                        <li><span>Website:</span> <a href="{{$project->url}}" target="_blank">{{$project->url}}</a></li>
                        <li><span>Category:</span> {{$project->sub_title}}</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@stop