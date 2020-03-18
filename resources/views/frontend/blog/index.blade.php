@extends('frontend.layouts.app')

@section('content')
    @banner
    <div class="container mx-auto text-center">
        <h1 class="px-3 py-3 mb-8 inline-block text-center text-gray-500 font-normal tracking-wide text-4xl mt-6 mb-1"
            style="background-color: rgba(0,0,0,0.5)">
            {{ isset($heading) ? $heading : 'Our Blog' }}
        </h1>
    </div>
    @endbanner

    <section class="bg-white lg:py-10 xs:pb-4 px-2">
        <div class="container mx-auto flex">
            <div class="w-2/5 border-r pr-12">
                <ul class="text-right">
                    @foreach($categories as $category)
                        <li class="py-1">
                            <a class="text-xl text-gray-600  {{request()->get('c') == $category->slug ? 'font-bold text-gray-800' : 'font-semibold'}}" href="blog?c={{$category->slug}}">
                                {{$category->name}}
                            </a>
                        </li>
                    @endforeach
                    <li class="py-2">
                        <a class="text-xl text-gray-600" href="search">
                            Search
                        </a>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col pl-10  ">
                @foreach($blogs as $blog)
                    @include('frontend.blog.blogitem')
                @endforeach
            </div>
        </div>
    </section>
@endsection
