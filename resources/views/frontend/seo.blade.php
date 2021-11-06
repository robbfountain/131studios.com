@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
    <meta name="twitter:card" content="131 Studios"/>
    <meta name="twitter:site" content="@131Studios"/>
    <meta property="twitter:title" content="131 Studios">
    <meta property="twitter:description" content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
    <meta name="twitter:creator" content="@131Studios"/>
    <meta name=”twitter:image” content=”{{asset('images/131-logo-210x53.png')}}” />
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url" content="{{route('services.index')}}">
    <meta property="og:title" content="131 Studios">
    <meta property="og:image" content="{{asset('images/131-logo-210x53.png')}}">
    <meta property="og:description" content="{Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
    <link rel="canonical" href="{{route('services.index')}}">
@endsection

@section('content')
    <x-banner>
        Search Engine Optimization
        <x-slot name="titleExpanded">(SEO)</x-slot>
    </x-banner>


    <x-service-offering service="SEO"
                        image="https://res.cloudinary.com/onethirtyone/image/upload/v1558561491/131%20Studios/seo_u1svnp.jpg">
        <p class="mb-6">
            Launching your website is only the first step in getting your business recognized on the web.
            Having organic traffic to your website and providing relevant content
            will help rank your website towards the top of major search engines such as Google, Bing and
            Yahoo!.
            Our SEO services will help put your business on the map and get recognized.
        </p>

        <p class="mb-6">
            There are many steps involved with search engine optimization and they can be confusing and
            frustrating. We know you don't have
            time to worry about this crucial step so let us do this for you.
        </p>

        <p class="mb-6">
            We'll start with a <a href="{{route('site-analysis.index')}}">FREE</a> website analysis that provides a
            starting point
            for improving your website's rank. From there we will optimize your site to make sure you're
            not penalized for irrelevant
            content and ensure your website stands out in search engines
        </p>

        <p class="mb-6">
            From there we'll offer recommendations and can even implement the changes we recommend.
            We'll continuously monitor your rankings and
            make necessary changes to help you get to the top.
        </p>

        <div class="text-center text-4xl mt-8 text-gray-600">
            Call Us Today! <a href="tel:3019920962" class="text-blue-700 hover:text-sky-700">301.992.0962</a>
        </div>
    </x-service-offering>

@endsection
