@extends('frontend.layouts.app')

@section('content')
    <x-banner>
        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-gray-500 font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                {{ isset($heading) ? $heading : 'Our Blog' }}
            </h1>
        </div>
    </x-banner>

    <section class="bg-white lg:py-10 xs:pb-4 px-2">
        <div class="container mx-auto flex">
            <div class="w-2/5 border-r pr-12">
                @include('frontend.blog.partials._categories')
            </div>

            <div class="flex flex-col pl-10  ">
                @foreach($blogs as $blog)
                    <x-blog-item :blog="$blog" />
{{--                    @include('frontend.blog.blogitem')--}}
                @endforeach
            </div>
        </div>
    </section>
@endsection
