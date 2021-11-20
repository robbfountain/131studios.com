@extends('frontend.layouts.app')

@section('meta')
    <meta name="description" content="{{$blog->summary}}"/>
    <meta name="twitter:card" content="{{$blog->summary}}"/>
    <meta name="twitter:site" content="@131Studios"/>
    <meta property="twitter:title" content="{{$blog->title}}">
    <meta property="twitter:description" content="{{$blog->summary}}">
    <meta property="twitter:image" content="{{$blog->twitterImage}}">
    <meta name="twitter:creator" content="@131Studios"/>
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url"
          content="{{route('blog.show',['year' => $blog->published->format('Y'),'month' => $blog->published->format('m'), 'slug'=>$blog->slug])}}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{$blog->title}}">
    <meta property="og:description" content="{{$blog->summary}}">
    <meta property="og:image" content="{{$blog->image}}">
    <meta property="og:article:published_time" content="{{$blog->published}}">
    <link rel="canonical"
          href="{{route('blog.show',['year' => $blog->published->format('Y'),'month' => $blog->published->format('m'), 'slug'=>$blog->slug])}}">
@endsection

@section('content')
    <x-banner :condensed="true"/>

    <section class="bg-gray-50 py-0 xs:py-8">
        <div class="container mx-auto prose sm:prose-sm lg:prose-lg xl:prose-xl px-0 mx:px-2">
            <div class="flex justify-center">
                <div>

                    <h1>{{$blog->title}}</h1>

                    <h6 class="flex items-center -mt-6">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>

                        <span>
                            {{$blog->published->format('M j, Y')}}
                        </span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3 mr-1" fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>
                            {{$blog->minutesToRead() . __(' minute read')}}
                        </span>
                    </h6>

                    <div class="flex mt-4">
                        @foreach($blog->categories as $category)
                            <a href="{{route('blog.category',$category)}}" class="inline-block">
                                <span class="mr-1 inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium {{$category}}">
                                    {{$category}}
                                </span>
                            </a>
                        @endforeach
                    </div>

                    {!! $blog->toHtml() !!}

                </div>
            </div>
        </div>
    </section>
@endsection
