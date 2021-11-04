@extends('frontend.layouts.app')

@section('content')
    <x-banner :condensed="true" />

    <section class="bg-gray-50 py-0 xs:py-8">
        <div class="xs:container mx-auto prose sm:prose-sm lg:prose-lg xl:prose-xl px-0 xs:px-4 mx:px-2">
            <div class="flex justify-center">
                <div>
                    @if(!$project->is_published)
                        <div class="my-2 p-2 border rounded-lg border-orange-600 bg-orange-100 text-orange-600 text-sm">
                            This project is not published
                        </div>
                    @endif

                    <h1>{{$project->title}}</h1>

                    @if($project->hasImage())
                        <div class="py-2">
                            <img src="{{$project->imageUrl(['crop' => 'fill', 'width' => 960, 'height' => 240])}}"
                                 alt="{{$project->title}}" class="">
                        </div>
                    @endif

                    {!! $project->toHtml() !!}

                    @if($project->url)
                        <div>
                            <a href="{{$project->url}}"
                               class="text-gray-600 hover:text-gray-500 text-lg border-b-4 -pb-4 -mb-2  ">Visit {{$project->title}}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
