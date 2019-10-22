@extends('frontend.layouts.app')

@section('content')

    @banner
    <div class="container mx-auto text-center">
        <h1 class="px-3 py-3 mb-8 inline-block text-center text-gray-500 font-normal tracking-wide text-4xl mt-6 mb-1"
            style="background-color: rgba(0,0,0,0.5)">
            Our Portfolio
        </h1>
    </div>
    @endbanner

    <section class="xs:py-3 lg:py-10">
        <div class="container mx-auto flex lg:flex-row xs:flex-col lg:flex-wrap">
            @foreach($projects as $project)
                <div class="lg:w-1/2 xs:w-full p-3 ">
                    <div class=" min-h-full max-h-full w-full shadow-lg rounded-lg  {{!$project->is_published || $project->published_at > now() ? 'bg-orange-200' : 'bg-white'}} rounded flex xs:flex-col lg:flex-row">
                        <div class="xs:w-full lg:w-1/2 bg-cover overflow-hidden" style="background-image: url({{$project->imageUrl()}}"></div>

                        <div class="xs:w-full lg:w-1/2 px-4 py-2">
                            <h2 class="text-2xl text-gray-700 mb-4 leading-none">{{$project->project_title}}</h2>
                            <div class="project-container text-sm leading-normal text-gray-600">
                                {!! $project->truncated()->toHtml() !!}
                            </div>

                            <div class="text-sm leading-normal text-gray-600 mt-4">
                                {{$project->project_description }}
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@stop