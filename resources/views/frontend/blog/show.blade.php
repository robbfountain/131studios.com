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
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-grey font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                Our Blog
            </h1>
        </div>
   @endbanner

    <section class="xs:py-3 lg:py-6">
        <div class="container mx-auto">
            <div class="mb-6 text-base flex items-center p-2 bg-grey-lighter rounded">
                <fa :icon="['fas','home']" class="mr-2"></fa>
                <a href="/" class="text-blue no-underline mr-2">Home</a>
                <fa :icon="['far','chevron-right']" size="xs" class="mr-2"></fa>
                <a href="/blog" class="text-blue no-underline mr-2">Blog</a>
                <fa :icon="['far','chevron-right']" size="xs" class="mr-2"></fa>
                {{$blog->title}}
            </div>

            <div class="flex lg:flex-row xs:flex-col">
                <div class="blog-container xs:w-full lg:w-2/3 px-4 xs:mb-6 lg:mb-0">
                    @if(!$blog->is_published || $blog->published_at > now())
                        <div class="my-2 p-2 border rounded-lg border-orange bg-orange-lightest text-orange text-sm">
                            This blog post is not published
                        </div>
                    @endif
                    <h1 class="text-3xl tracking-wide mont text-grey-darker">{{$blog->title}}</h1>
                    <div class="my-3 text-grey-darker text-sm flex items-center">
                        <img src="{{$blog->user->avatar()}}" alt="{{$blog->user->name}}'s Avatar" class="h-8 w-8 rounded-full mr-2">
                        <div>
                            Posted by: <span class="text-blue">{{$blog->user->name}}</span> on {{$blog->published_at->format('F d, Y')}}
                        </div>
                    </div>
                    <div class="py-2">
                        <img src="{{$blog->imageUrl(['crop' => 'fill', 'width' => 960, 'height' => 240])}}" alt="{{$blog->title}}" class="">
                    </div>

                    {!! $blog->toHtml() !!}

                    <div class="py-4">
                        <h5 class="roboto mb-1 text-grey-darkest text-base">Share This!</h5>
                        <div class="w-1/2 p-2 bg-grey-lightest border rounded border-grey-lighter">
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


                <div class="xs:w-full lg:w-1/3 px-4 flex flex-col xs:border-l-0 lg:border-l">
                    <div>
                        <h2 class="title roboto">
                            Stay Informed
                        </h2>
                        <div>
                            <subscription-form inline-template>
                                <div>
                                    <div v-if="form.successful"
                                         class="mb-4 text-xs text-green-dark bg-green-lightest p-3 border-green border rounded">
                                        <span class="font-bold">Thanks!</span> Your email has been added to our mailing
                                                                               list.
                                    </div>
                                    <form action="#" @submit.prevent>
                                        <div class="flex flex-col py-2">
                                            <label for="email"
                                                   class="required mb-1 text-xs font-semibold uppercase tracking-wide text-grey-darker"
                                                   :class="{'text-red' : form.errors.has('email')}">
                                                Email Address
                                            </label>
                                            <input type="email" id="email" v-model="form.email"
                                                   class="w-full border px-3 py-2"
                                                   :class="{'border-red' : form.errors.has('email')}">
                                            <span v-if="form.errors.has('email')" class="text-red text-sm">
                                              @{{form.errors.get('email')}}
                                        </span>

                                        </div>
                                        <div class="flex flex-col py-2">
                                            <label for="name"
                                                   class="required mb-1 text-xs font-semibold uppercase tracking-wide text-grey-darker"
                                                   :class="{'text-red' : form.errors.has('name')}">Name</label>
                                            <input type="text" id="name" v-model="form.name"
                                                   class="w-full border px-3 py-2"
                                                   :class="{'border-red' : form.errors.has('name')}">
                                            <span v-if="form.errors.has('name')" class="text-red text-sm">
                                            @{{form.errors.get('name')}}
                                        </span>
                                        </div>

                                        <div class="py-2">
                                            <button type="submit" @click="submitForm"
                                                    class="w-full border px-4 py-2 rounded border-blue font-semibold text-blue uppercase text-sm hover:text-white hover:bg-blue hover:border-transparent">
                                                <span v-if="form.busy"> <fa :icon="['far','spinner']" spin></fa></span>
                                                <span v-else> Subscribe</span>

                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </subscription-form>
                        </div>
                    </div>

                    <div class="py-8">
                        <h2 class="title roboto">Recent Blog Posts</h2>
                        <ul class="list-reset">
                            @foreach($recent as $blog)
                                <li class="py-2">
                                    <div class="flex">
                                        <fa :icon="['far','chevron-right']" class="mr-2"></fa>
                                        <a href="{{route('blog.show',$blog->slug)}}"
                                           class="text-blue no-underline hover:font-semibold">{{$blog->title}}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection