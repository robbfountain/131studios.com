@extends('frontend.layouts.app')


@section('meta')
    <link rel="canonical" href="{{route('index')}}" />
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
    <meta name="twitter:card" content="131 Studios"/>
    <meta name="twitter:site" content="@131Studios"/>
    <meta property="twitter:title" content="131 Studios">
    <meta property="twitter:description" content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
    <meta name="twitter:creator" content="@131Studios"/>
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url" content="{{route('blog.index')}}">
    <meta property="og:title" content="131 Studios">
    <meta property="og:description" content="{Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
@endsection

@section('content')
    <x-banner>
        Our <span class="text-blue-500">Blog</span>

        <x-slot name="subtitle">
            We like to blog about all sorts of stuff in the development, security and design world.
            Here's some of our recent entries.
        </x-slot>
    </x-banner>

    <section class="bg-white px-2 py-10">
        <div class="md:container mx-auto">
            <div class="flex flex-col pl-10 ">
                @foreach($blogs as $blog)
                    <x-blog-item :blog="$blog"/>
                @endforeach
            </div>
        </div>
    </section>
@endsection
