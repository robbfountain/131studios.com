@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="{{$blog->preview()}}"/>
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url" content="{{$blog->shareUrl()}}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{$blog->title}}">
    <meta property="og:description" content="{{$blog->preview()}}">
    <meta property="og:image" content="{{$blog->imageUrl()}}">
    <meta property="og:article:published_time" content="{{$blog->published_at}}">
    <link rel="canonical" href="{{$blog->shareUrl()}}">
@endsection

@section('content')
    <x-banner :condensed="true" />

    <section class="bg-gray-50 py-0 xs:py-8">
        <div class="xs:container mx-auto prose sm:prose-sm lg:prose-lg xl:prose-xl px-0 xs:px-4 mx:px-2">
            <div class="flex justify-center">
                <div>
                    @if(!$blog->is_published || $blog->published_at > now())
                        <div class="my-2 p-2 border rounded-lg border-orange-600 bg-orange-100 text-orange-600 text-sm">
                            This blog post is not published
                        </div>
                    @endif

                    <h1>{{$blog->title}}</h1>

                    <h6>{{$blog->category->name}} - {{$blog->published_at->format('M j, Y')}} {{$blog->isOriginal() ? '- ' .  $blog->minutesToRead() . ' minute
                        read' : ''}}
                    </h6>

                    @if($blog->hasImage())
                        <div class="py-2">
                            <img src="{{$blog->imageUrl(['crop' => 'fill', 'width' => 960, 'height' => 240])}}"
                                 alt="{{$blog->title}}" class="">
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

                    @if($blog->tweetId())
                        <div class="mt-8 xs:w-full lg:w-1/2">
                            <h2>Comments</h2>
                            <div class="mt-8 p-6 text-lg border-l-4 border-blue-twitter bg-blue-200">
                                You can reply to <a class="underline" href="{{$blog->tweetUrl()}}">this tweet</a> to
                                comment on this post.
                            </div>
                            <div class="mt-8">
                                @foreach($blog->webmention as $mention)
                                   <x-web-mention :mention="$mention" />
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
