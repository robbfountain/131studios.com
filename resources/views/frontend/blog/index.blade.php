@extends('frontend.layouts.app')

@section('content')
    <x-banner>
        {!!  $heading ?? 'Our <span class="text-indigo-500">Blog</span>' !!}

        <x-slot name="subtitle">
            We like to blog about all sorts of stuff in the development, security and design world.
            Here's some of our recent entries.
        </x-slot>
    </x-banner>

    <section class="bg-white px-2 py-10">
        <div class="flex flex-col pl-10 items-center  ">
            @foreach($blogs as $blog)
                <x-blog-item :blog="$blog"/>
            @endforeach
        </div>
    </section>
@endsection
