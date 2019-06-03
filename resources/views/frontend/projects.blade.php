@extends('frontend.layouts.app')


@section('content')
    @banner

    <div class="container mx-auto text-center">
        <h1 class="px-3 py-3 mb-8 inline-block text-center text-grey font-normal tracking-wide text-4xl mt-6 mb-1"
            style="background-color: rgba(0,0,0,0.5)">
            Our Portfolio
        </h1>
    </div>
    @endbanner

    <section class="xs:py-3 lg:py-10">
        <div class="container mx-auto">
            <div class="flex lg:flex-row xs:flex-col lg:flex-wrap">
                @foreach($projects as $project)
                    <div class="w-1/2 p-3">
                        <div class="w-full border-2 {{!$project->is_published || $project->published_at > now() ? 'border-orange bg-orange-lightest' : 'border-grey-lighter bg-grey-lightest'}} rounded p-3 flex xs:flex-col lg:flex-row">
                            <div class="w-1/2 px-2">
                                <img src="{{$project->imageUrl()}}"
                                     alt="{{$project->project_title}}"
                                     class="p-2 bg-white rounded border">
                                
                                <div class="mt-8 text-center ">
                                    <a href="{{$project->url}}"
                                       target="_blank"
                                    class="border rounded border-blue px-4 py-2 text-sm no-underline text-blue hover:bg-blue hover:text-white">View Project</a>
                                </div>
                            </div>

                            <div class="w-1/2 px-2">
                                <h2 class="text-lg text-grey-darker mb-4">{{$project->project_title}}</h2>
                                <div class="text-sm leading-normal text-grey-dark">
                                    {{$project->preview()}}
                                </div>

                                <div class="text-sm leading-normal text-grey-dark mt-4">
                                    {{$project->project_description }}
                                </div>
                            </div>
                        </div>

                    </div>






                    {{--                    <div class="xs:w-full lg:w-1/3 px-3 mb-4">--}}
                    {{--                        <div class="max-w-sm w-full lg:max-w-full lg:flex">--}}
                    {{--                            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"--}}
                    {{--                                 style="background-image: url('{{$project->imageUrl()}}');">--}}
                    {{--                            </div>--}}
                    {{--                            <div class="border-r border-t border-l border-b border-grey-light rounded-b rounded-r flex flex-col p-4 leading-normal bg-white lg:border-l-0 lg:rounded-b-none lg:rounded-r">--}}
                    {{--                                <h4 class="font-semibold text-blue">{{$project->title}}</h4>--}}
                    {{--                                <div class="mt-3 text-grey-dark text-sm">--}}
                    {{--                                    {{$project->body}}--}}
                    {{--                                </div>--}}
                    {{--                                <div class="mt-4">--}}
                    {{--                                    <a href="{{$project->url}}"--}}
                    {{--                                       target="_blank"--}}
                    {{--                                       class="border rounded px-3 py-2 border-blue text-blue no-underline hover:bg-blue hover:text-white">View--}}
                    {{--                                                                                                                                          Project</a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}

                    {{--                        </div>--}}
                    {{--                    </div>--}}
                @endforeach
            </div>
        </div>
    </section>
@stop