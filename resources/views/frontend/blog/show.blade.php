@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="{{$blog->getPreview()}}"/>
    <meta name="twitter:card" content="{{$blog->getPreview()}}"/>
    <meta name="twitter:site" content="@131Studios"/>
    <meta property="twitter:title" content="{{$blog->title}}">
    <meta property="twitter:description" content="{{$blog->getPreview()}}">
    <meta property="twitter:image" content="{{$blog->imageUrl()}}">
    <meta name="twitter:creator" content="@131Studios"/>
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url" content="{{$blog->shareUrl()}}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{$blog->title}}">
    <meta property="og:description" content="{{$blog->getPreview()}}">
    <meta property="og:image" content="{{$blog->imageUrl()}}">
    <meta property="og:article:published_time" content="{{$blog->published_at}}">
    <link rel="canonical" href="{{$blog->shareUrl()}}">
@endsection

@section('content')
    <x-banner :condensed="true"/>

    <section class="bg-gray-50 py-0 xs:py-8">
        <div class="container mx-auto prose sm:prose-sm lg:prose-lg xl:prose-xl px-0 mx:px-2">
            <div class="flex justify-center">
                <div>
                    @if(!$blog->is_published || $blog->published_at > now())
                        <div class="my-2 p-2 border rounded-lg border-orange-600 bg-orange-100 text-orange-600 text-sm">
                            This blog post is not published
                        </div>
                    @endif

                    <h1>{{$blog->title}}</h1>

                    <h6 class="flex items-center -mt-6">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span>
                            {{$blog->published_at->format('M j, Y')}}
                        </span>
                        @if($blog->isOriginal())
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3 mr-1" fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{$blog->minutesToRead() . __(' minute read')}}
                        @endif

                    </h6>

                    @if($blog->hasImage())
                        <div class="py-2">
                            <img src="{{$blog->imageUrl(['crop' => 'fill', 'width' => 960, 'height' => 240])}}"
                                 alt="{{$blog->title}}" class="blog-main-image">
                        </div>
                    @endif

                    {!! $blog->toHtml() !!}

                    @if($blog->tweet)
                        <a href="{{$blog->tweet}}">Twitter</a>
                    @endif

                    @if($blog->reference_url)
                        <a href="{{$blog->reference_url}}"
                           class="underline text-lg text-gray-600 hover:text-gray-500">{{$blog->reference_url}}</a>
                    @endif

                    @if($blog->url)
                        <div>
                            <a href="{{$blog->url}}"
                               class="text-gray-600 hover:text-gray-500 text-lg border-b-4 -pb-4 -mb-2  ">Visit {{$blog->blogTitleToProjectTitle()}}</a>
                        </div>
                    @endif

                    <div class="mt-12 p-4 rounded-md bg-blue-50">
                        <h5 class="font-bold">You may also enjoy reading...</h5>
                        @foreach(\App\Blog::blogPost()->related($blog->category->id)->where('id','!=',$blog->id)->take(4)->get() as $related)
                            <div class="py-1">
                                <a class="text-base" href="{{$related->getLinkToFullPost()}}">
                                    {{$related->title}}
                                </a>
                                <div class="text-sm text-gray-500">
                                    {{$related->published_at->diffForHumans()}}
                                </div>

                            </div>
                        @endforeach
                    </div>

                    @if($blog->tweetId())
                        <div class="mt-8 xs:w-full lg:w-1/2">
                            <h2>Comments</h2>
                            <div class="mt-8 p-6 text-lg border-l-4 border-blue-twitter bg-blue-200">
                                You can reply to <a class="underline" href="{{$blog->tweetUrl()}}">this tweet</a> to
                                comment on this post.
                            </div>
                            <div class="mt-8">
                                @foreach($blog->webmention as $mention)
                                    <x-web-mention :mention="$mention"/>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>


    </section>
@endsection
