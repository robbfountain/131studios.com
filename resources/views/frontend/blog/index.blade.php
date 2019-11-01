@extends('frontend.layouts.app')

@section('content')
   @banner
        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-gray-500 font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                Our Blog
            </h1>
        </div>
    @endbanner

    <section class="bg-white lg:py-10 xs:pb-4 px-2">
        <div class="container mx-auto w-2/3">
            <div class="flex flex-col ">
                @foreach($blogs as $blog)
                    @include('frontend.blog.blogitem')
                @endforeach
            </div>
        </div>
    </section>
@endsection