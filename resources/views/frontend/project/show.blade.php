@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="{{$project->title}} | 131 Studios Portfolio."/>
    <meta name="twitter:card" content="131 Studios"/>
    <meta name="twitter:site" content="@131Studios"/>
    <meta property="twitter:title" content="{{$title}}">
    <meta property="twitter:description"
          content="{{$project->title}} | 131 Studios Portfolio.">
    <meta name="twitter:creator" content="@131Studios"/>
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url"
          content="{{route('project.show',['year'=>$project->published->format('Y'),'month'=>$project->published->format('m'),'slug'=>$project->slug])}}">
    <meta property="og:title" content="{{$title}}">
    <meta property="og:description"
          content="{{$project->title}} | 131 Studios Portfolio.">
@endsection

@section('content')
    <x-banner :condensed="true"/>

    <section class="bg-gray-50 py-0 xs:py-8">
        <div class="xs:container mx-auto prose sm:prose-sm lg:prose-lg xl:prose-xl px-0 xs:px-4 mx:px-2">
            <div class="flex justify-center">
                <div>

                    <h1>{{$title}}</h1>

                    {!! $project->toHtml() !!}

                    @if($project->url)
                        <div class="flex space-x-4 items-center">
                            <div class="w-1/2">
{{--                                <img src="{{\Illuminate\Support\Facades\Storage::disk('s3')->temporaryUrl($project->preview_image,now()->addMinutes(10))}}"--}}
{{--                                     alt="{{$title}}" class="h-48 r w-96">--}}
                            </div>
                            <div class="px-6">
                                <a href="{{$project->url}}"
                                   class="text-gray-600 hover:text-gray-500 text-lg border-b-4 -pb-4 -mb-2  ">Visit {{$title}}</a>
                            </div>
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
