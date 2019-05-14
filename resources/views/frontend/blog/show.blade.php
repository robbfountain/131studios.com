@extends('frontend.layouts.app')

@section('content')
    <div class="bg-cover lg:py-10 xs:pb-4 flex flex-col"
         style="background-image: url('../images/web-design-greencastle-pa.png');">

        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-grey font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                Our Blog
            </h1>
        </div>

    </div>
    <div class="my-6 container mx-auto">
        <ul class="breadcrumb list-reset flex">
            <li> <fa :icon="['fas','home']" ></fa> Home</li>
            <li> <a href="/blog">Blog</a></li>
            <li> {{$blog->title}}</li>
        </ul>
    </div>
    <div class="bg-white lg:py-10 xs:pb-4 px-2 mont">
        <div class="container mx-auto blog-container">
            <h1 class="text-3xl tracking-wide mont text-grey-darker">{{$blog->title}}</h1>
            <img src="/{{$blog->image}}" alt="">
            <div class="mt-3 text-grey text-sm">
                Posted by: 131 Studios on {{$blog->published_at->format('F d, Y')}}
                <span class="ml-4 border rounded-full px-4 py-0 border-blue text-blue hover:border-blue-light hover:text-blue-light">
                    {{strtolower($blog->category->name)}}
                </span>
            </div>
            <div class="mt-3 leading-normal text-grey-darker">
                {!! $blog->toHtml() !!}
            </div>

        </div>
    </div>
@endsection