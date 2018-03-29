@extends('frontend.partials.layout')

@section('header')
    @include('frontend.partials.header-sub')
@stop

@section('content')
    <div class="container margin-top-50" id="app">
        <div class="row">
            <div class="col-md-12">
                <!-- Filters -->
                <div id="filters">
                    <ul class="option-set margin-bottom-40">
                        <li><a href="#filter" class="selected" data-filter="*">All</a></li>
                        @foreach(App\Models\Category::all() as $category)
                            <li><a href="#filter" data-filter=".{{$category->name}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <!-- Projects -->
        <div class="projects gutter style-4 isotope-wrapper">

            <div class="isotope-sizer"></div>

            @foreach($projects as $project)
                <!-- Item -->
                    <div class="isotope-item {{$project->category->name}}">
                        <a href="{{route('projects.show', $project->slug)}}">
                            <img src="{{$project->primary_image}}" alt="">
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h4>{{$project->title}}</h4>
                                    <span>{{$project->sub_title}}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
        </div>
    </div>
    <div class="clearfix"></div>

    <br>
    <br>

    <!-- Infobox -->
    <div class="info-banner-fw">
        <div class="container">
            <div class="row">
                <div class="col-md-12">We're a Quality-Focused Creative Company <a href="{{route('contact.project')}}">Contact
                        Us</a></div>
            </div>
        </div>
    </div>
@stop