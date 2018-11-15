@extends('frontend.layouts.app')


@section('content')
    <section class="py-8 px-2">
        <div class="container mx-auto">
            <div class="text-center">
                <h2 class="title font-medium text-3xl my-4">Our Work</h2>
            </div>

            <div class="button-group filters-button-group">
                <button class="button is-checked" data-filter="*">show all</button>
                <button class="button" data-filter=".web">metal</button>
            </div>
            <div class="text-center flex flex-wrap grid">
                @foreach($projects as $project)
                    <div class=" w-1/3 flex flex-col grid-item {{$project->tagString()}}">
                        <img src="{{$project->primary_image}}" alt="Not Found">
                        <div class="bg-blue-darker p-2 text-center text-xl text-white name">
                            {{$project->title}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop