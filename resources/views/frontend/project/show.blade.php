@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
    <meta name="twitter:card" content="131 Studios"/>
    <meta name="twitter:site" content="@131Studios"/>
    <meta property="twitter:title" content="{{$project->title}}">
    <meta property="twitter:description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
    <meta name="twitter:creator" content="@131Studios"/>
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url" content="{{route('project.show',$project->slug)}}">
    <meta property="og:title" content="{{$project->title}}">
    <meta property="og:description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
@endsection

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
