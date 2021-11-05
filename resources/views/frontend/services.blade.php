@extends('frontend.layouts.app')

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
        Services
    </x-banner>

    <div class="py-12 bg-gray-50">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mt-20">
                <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
                    <div class="flex flex-col bg-white rounded-2xl shadow-xl">
                        <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                            <div class="absolute top-0 p-5 inline-block bg-gradient-to-b from-blue-700 to-sky-700 rounded-xl shadow-lg transform -translate-y-1/2">
                                <!-- Heroicon name: outline/phone -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-gray-900">Search Engine Optimization</h3>
                            <p class="mt-4 text-base text-gray-500">We optimize your site and content making it easier
                                for search engines to
                                understand what your website is about. We get your website in front of your
                                customers ahead of your competition. </p>
                        </div>
                        <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
                            <a href="{{route('seo.index')}}"
                               class="text-base font-medium text-blue-700 hover:text-blue-600">Learn
                                more<span aria-hidden="true"> &rarr;</span></a>
                        </div>
                    </div>

                    <div class="flex flex-col bg-white rounded-2xl shadow-xl">
                        <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                            <div class="absolute top-0 p-5 inline-block bg-gradient-to-b from-blue-700 to-sky-700 rounded-xl shadow-lg transform -translate-y-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-gray-900">Website Design</h3>
                            <p class="mt-4 text-base text-gray-500">
                                We provide stunning, unique websites showcasing your business and services. Promote and
                                sell your products and services with professional solutions such as appointment
                                schedulers, shopping carts and contact forms.
                            </p>
                        </div>
                        <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
                            <a href="{{route('website-design.index')}}"
                               class="text-base font-medium text-blue-700 hover:text-blue-600">Learn
                                more<span aria-hidden="true"> &rarr;</span></a>
                        </div>
                    </div>

                    <div class="flex flex-col bg-white rounded-2xl shadow-xl">
                        <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                            <div class="absolute top-0 p-5 inline-block bg-gradient-to-b from-blue-700 to-sky-700 rounded-xl shadow-lg transform -translate-y-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-gray-900">Website Hosting</h3>
                            <p class="mt-4 text-base text-gray-500">From high traffic web applications to local business
                                profiles, we use industry leading server and implement the highest levels of security to ensure your website and data are available and secure.</p>
                        </div>
                        <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
                            <a href="{{route('hosting.index')}}" class="text-base font-medium text-blue-700 hover:text-blue-600">
                                Learn more.<span aria-hidden="true"> &rarr;</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
