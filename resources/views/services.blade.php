@extends('layouts.app')

@section('meta')
    <link rel="canonical" href="{{route('services.index')}}" />
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
    <meta name="twitter:card" content="131 Studios"/>
    <meta name="twitter:site" content="@131Studios"/>
    <meta property="twitter:title" content="131 Studios">
    <meta property="twitter:description" content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
    <meta name="twitter:creator" content="@131Studios"/>
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url" content="{{route('services.index')}}">
    <meta property="og:title" content="131 Studios">
    <meta property="og:description" content="{Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
@endsection

@section('content')

    <x-banner>
        Our<x-slot name="titleExpanded">Services</x-slot>
    </x-banner>

    <section>
        <div class="py-12 bg-gray-50">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                        Our Service Offerings
                    </h3>
                    <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
                        We get it...It can be difficult to establish your online presence. From designing your
                        website
                        or updating an existing site, there's a lot to handle. We want to make this process easy
                        for
                        you.
                    </p>
                </div>

                <div class="mt-10">
                    <ul class="md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <li>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div
                                            class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                        <i class="fas fa-paint-brush"></i>

                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">Website Design</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        Stand out from your competitors with a professionally designed website
                                        from
                                        131
                                        Studios.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-10 md:mt-0">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div
                                            class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                        <i class="fas fa-server"></i>

                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">Hosting</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        Host your website on industry leading Private Servers that are 100%
                                        maintained
                                        by us.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-10 md:mt-0">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div
                                            class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                        <i class="fas fa-share-alt"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">
                                        Social Media</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        Get your business noticed on social networks by letting us manage you
                                        social
                                        media accounts.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-10 md:mt-0">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div
                                            class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">Search Engine
                                        Optimization
                                        (SEO)
                                    </h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        We'll make sure your customers can find you on the web by optimizing
                                        your
                                        website better placement.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

@endsection
