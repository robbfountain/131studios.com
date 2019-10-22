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
    @banner¬
    <div class="container mx-auto text-center">
        <h1 class="px-3 py-3 mb-8 inline-block text-center text-gray-500 font-normal tracking-wide text-4xl mt-6 mb-1"
            style="background-color: rgba(0,0,0,0.5)">
            Our Blog
        </h1>
    </div>
    @endbanner

    <section class="">
        <div class="mb-6 bg-gray-200 text-sm flex items-center p-2 rounded">
            <div class="container mx-auto">
                <fa :icon="['fas','home']" class="mr-2 text-blue-900"></fa>
                <a href="/" class="text-blue-700 no-underline mr-2">Home</a>
                <fa :icon="['far','chevron-right']" size="xs" class="mr-2"></fa>
                <a href="/blog" class="text-blue-700 no-underline mr-2">Blog</a>
                <fa :icon="['far','chevron-right']" size="xs" class="mr-2"></fa>
                <span class="text-blue-900">
                 {{$blog->title}}
            </span>
            </div>
        </div>

        <div class="container mx-auto ">
            <div class="flex justify-center">
                <div class="blog-container ">
                    @if(!$blog->is_published || $blog->published_at > now())
                        <div class="my-2 p-2 border rounded-lg border-orange bg-orange-lightest text-orange text-sm">
                            This blog post is not published
                        </div>
                    @endif

                    <h1>{{$blog->title}}</h1>
                        <h6>Original - {{$blog->published_at->format('M j, Y')}} - {{$blog->minutesToRead()}} Minute Read</h6>

                    <div class="py-2">
                        <img src="{{$blog->imageUrl(['crop' => 'fill', 'width' => 960, 'height' => 240])}}"
                             alt="{{$blog->title}}" class="blog-main-image">
                    </div>

                    {!! $blog->toHtml() !!}

                    <div class="py-4">
                        <h5 class="roboto mb-1 text-gray-600 text-base">Share This!</h5>
                        <div class="w-1/2 p-2 bg-gray-300 border rounded border-gray-@300">
                            <a href="#"
                               alt="Share on Facebook"
                               title="Share on Facebook"
                               class="facebook mr-2"
                               onclick="
                              window.open(
                                'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
                                'facebook-share-dialog',
                                'width=626,height=436');
                                return false;">
                                <fa :icon="['fab', 'facebook-square']" size="2x"></fa>
                            </a>

                            <a href="https://twitter.com/intent/tweet?text={{$blog->title}}&url={{$blog->shareUrl()}}"
                               data-url="{{$blog->shareUrl()}}"
                               data-text="{{$blog->title}}"
                               alt="Share on Twitter"
                               title="Share on Twitter"
                               class="twitter">
                                <fa :icon="['fab', 'twitter-square']" size="2x"></fa>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center my-6">
                <subscription-form inline-template class="w-2/3">
                    <div class="flex flex-col border-t-2 border-blue-300 px-3 pb-6 pt-2">
                        <div class="w-3/4">
                            <h2 class="text-gray-800 text-2xl">Stay up to date with all things Laravel </h2>
                            <p class="text-gray-600 leading-normal text-xl">We periodically send out a brief newsletter hilighting some of our most recent blog
                                posts, tweets, videos and other useful content.</p>
                        </div>

                        <div>
                            <form action="#" class="mt-4 w-3/4 bg-white flex justify-between items-center rounded-full border shadow-lg h-12" @submit.prevent>
                                <i class="fad fa-envelope text-gray-400 fa-lg pl-4"></i>
                                <input type="email"
                                       id="email"
                                       v-model="form.email"
                                       class="flex-1 text-gray-600 px-3 focus:outline-none text-xl">

                                <button type="submit"
                                        @click="submitForm"
                                        class="focus:outline-none bg-blue-800 text-white rounded-full uppercase text-sm tracking-widest px-3 h-12">
                                    <i class="far fa-spinner fa-spin mr-1" v-if="form.busy"></i>
                                    <span> Subscribe</span>
                                </button>
                            </form>
                            <div class="text-green-500 ml-1 mt-3 w-2/3" v-if="form.successful">
                                Thanks!  Your email address has been added to our mailing list. Don't worry, you can unsubscribe at any time.
                            </div>
                            <div class="text-red-500 ml-1 mt-3 w-2/3" v-if="form.errors.has('email')">
                                Oops.  Please enter a valid email address and try again
                            </div>
                        </div>
                    </div>
                </subscription-form>
            </div>


        </div>
    </section>

@endsection
