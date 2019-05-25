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
                    <div class="xs:w-full lg:w-1/3 px-3 mb-4">
                        <div class="max-w-sm w-full lg:max-w-full lg:flex">
                            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                 style="background-image: url('{{$project->imagePath()}}');">
                            </div>
                            <div class="border-r border-t border-l border-b border-grey-light rounded-b rounded-r flex flex-col p-4 leading-normal bg-white lg:border-l-0 lg:rounded-b-none lg:rounded-r">
                                <h4 class="font-semibold text-blue">{{$project->title}}</h4>
                                <div class="mt-3 text-grey-dark text-sm">
                                    {{$project->description}}
                                </div>
                                <div class="mt-4">
                                    <a href="{{$project->url}}"
                                       target="_blank"
                                       class="border rounded px-3 py-2 border-blue text-blue no-underline hover:bg-blue hover:text-white">View
                                                                                                                                          Project</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop