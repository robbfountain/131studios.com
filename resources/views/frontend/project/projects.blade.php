@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
    <meta name="twitter:card" content="131 Studios"/>
    <meta name="twitter:site" content="@131Studios"/>
    <meta property="twitter:title" content="131 Studios">
    <meta property="twitter:description" content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
    <meta name="twitter:creator" content="@131Studios"/>
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url" content="{{route('project.index')}}">
    <meta property="og:title" content="131 Studios">
    <meta property="og:description" content="{Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
@endsection

@section('content')
    <x-banner>
        Our <span class="text-blue-500">Work</span>
        <x-slot name="subtitle">
           Check out some of the work we have performed for our clients.
        </x-slot>
    </x-banner>

    <div class="relative bg-gray-50 pt-2 pb-20 px-4 sm:px-6 lg:pt-2 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                @foreach($projects as $project)
                    <x-portfolio-item :project="$project" />
                @endforeach
            </div>
        </div>
    </div>

@endsection
