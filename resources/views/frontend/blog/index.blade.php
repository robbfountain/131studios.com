@extends('frontend.layouts.app')

@section('content')
    <div class="bg-cover lg:py-10 xs:pb-4 flex flex-col"
         style="background-image: url('images/web-design-greencastle-pa.png');">

        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-grey font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
               Our Blog
            </h1>
        </div>

    </div>

    <div>
        <div class="bg-white lg:py-10 xs:pb-4 px-2">
            <div class="container mx-auto flex flex-wrap">
                @foreach($blogs as $blog)
                    <div class="w-1/4 flex flex-col p-4 mb-6 rounded-lg hover:bg-grey-lighter transition">
                        <div class="mb-2">
                            <a href="{{route('blog.show',$blog->slug)}}"
                               class="tracking-wide text-xl text-grey-darker no-underline hover:text-blue">
                                {{$blog->title}}
                            </a>
                            <div class="text-grey-dark text-xs mt-1">
                                Posted by: <span class="text-blue">131 Studios</span> on {{$blog->published_at->format('M d, Y')}}
                            </div>
                        </div>
                        <div>
                            <img src="{{$blog->image}}" alt="">
                        </div>
                        <div class="mt-6 mb-6 text-center">
                            <a href="{{route('blog.show', $blog->slug)}}" class="rounded border no-underline text-blue border-blue px-4 py-2 hover:bg-blue hover:text-white hover:border-transparent">
                                Read More
                            </a>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection