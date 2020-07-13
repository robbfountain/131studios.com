@extends('frontend.layouts.app')

@section('content')
    <x-banner>
        {{ isset($heading) ? $heading : 'Our Blog' }}

       <x-slot name="subtitle">
            We like to blog about all sorts of stuff in the development, security and design world.
            Here's some of our recend entries.
       </x-slot>
    </x-banner>

    <section class="bg-white lg:py-10 xs:pb-4 px-2">
        <div class="container mx-auto flex">
            <div class="w-2/5 border-r pr-12">
                <x-categories :categories="$categories"/>
            </div>

            <div class="flex flex-col pl-10  ">
                @foreach($blogs as $blog)
                    <x-blog-item :blog="$blog"/>
                @endforeach
            </div>
        </div>
    </section>
@endsection
