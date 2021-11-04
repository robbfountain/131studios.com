@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
    <meta name="twitter:card" content="131 Studios"/>
    <meta name="twitter:site" content="@131Studios"/>
    <meta property="twitter:title" content="131 Studios">
    <meta property="twitter:description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
    <meta name="twitter:creator" content="@131Studios"/>
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url" content="{{url('/')}}">
    <meta property="og:title" content="131 Studios">
    <meta property="og:description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
    <link rel="canonical" href="{{url('/')}}">
@endsection

@section('content')
    <div class="relative overflow-hidden">
        <header class="relative" x-data="{mobileMenu:false}">
            <div class="bg-blue-700 pt-6">
                <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6"
                     aria-label="Global">
                    <div class="flex items-center flex-1">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="#">
                                <span class="sr-only">131 Studios</span>
                                <img class="h-8 w-auto sm:h-10"
                                     src="{{asset('images/logo-image-55x55.png')}}" alt="131 Studios">
                            </a>
                            <div class="-mr-2 flex items-center md:hidden">
                                <button type="button"
                                        @click="mobileMenu=!mobileMenu"
                                        class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white"
                                        aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <!-- Heroicon name: outline/menu -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4 6h16M4 12h16M4 18h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="hidden space-x-8 md:flex md:ml-10">
                            <a href="{{route('services.index')}}"
                               class="text-base font-medium text-white hover:text-gray-300">Services</a>

                            <a href="{{route('project.index')}}"
                               class="text-base font-medium text-white hover:text-gray-300">Projects</a>

                            <a href="{{route('blog.index')}}"
                               class="text-base font-medium text-white hover:text-gray-300">Blog</a>

                            <a href="{{route('contact.index')}}"
                               class="text-base font-medium text-white hover:text-gray-300">Contact</a>
                        </div>
                    </div>
                    <div class="hidden md:flex md:items-center md:space-x-6">
                        <a href="{{route('site-analysis.index')}}"
                           class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-800">
                            Free Site Analysis
                        </a>
                    </div>
                </nav>
            </div>

            <!--
              Mobile menu, show/hide based on menu open state.

              Entering: "duration-150 ease-out"
                From: "opacity-0 scale-95"
                To: "opacity-100 scale-100"
              Leaving: "duration-100 ease-in"
                From: "opacity-100 scale-100"
                To: "opacity-0 scale-95"
            -->
            <div x-show="mobileMenu"
                 x-transition:enter="ease-out duration-150"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="ease-in duration-100"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top md:hidden">
                <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="px-5 pt-4 flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto" src="{{asset('images/logo-image-55x55.png')}}"
                                 alt="131 Studios">
                        </div>
                        <div class="-mr-2">
                            <button @click="mobileMenu=false" type="button"
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="pt-5 pb-6">
                        <div class="px-2 space-y-1">
                            <a href="{{route('services.index')}}"
                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Services</a>

                            <a href="{{route('project.index')}}"
                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Projects</a>

                            <a href="{{route('blog.index')}}"
                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Blog</a>

                            <a href="{{route('contact.index')}}"
                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Contact</a>

                        </div>
                        <div class="mt-6 px-5">
                            <a href="{{route('site-analysis.index')}}"
                               class="block text-center w-full py-3 px-4 rounded-md shadow bg-blue-600 text-white font-medium hover:bg-blue-700">
                                Free Website Analysis</a>
                        </div>
                        <div class="mt-6 px-5">
                            <p class="text-center text-base font-medium text-gray-500">Existing customer? <a href="#"
                                                                                                             class="text-gray-900 hover:underline">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="pt-10 bg-gradient-to-b from-blue-700 to-sky-700 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
                <div class="mx-auto max-w-7xl lg:px-8">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                            <div class="lg:py-24">
                                {{--                                <a href="#"--}}
                                {{--                                   class="inline-flex items-center text-white bg-black rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">--}}
                                {{--                                    <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-indigo-500 rounded-full">We're--}}
                                {{--                                        hiring</span>--}}
                                {{--                                    <span class="ml-4 text-sm">Visit our careers page</span>--}}
                                {{--                                    <!-- Heroicon name: solid/chevron-right -->--}}
                                {{--                                    <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"--}}
                                {{--                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
                                {{--                                        <path fill-rule="evenodd"--}}
                                {{--                                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"--}}
                                {{--                                              clip-rule="evenodd"/>--}}
                                {{--                                    </svg>--}}
                                {{--                                </a>--}}
                                <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                                    <span class="block">Take your website</span>
                                    <span class="block text-blue-400">to the next level</span>
                                </h1>
                                <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                    Business in Greencastle, Chambersburg and Hagerstown trust <span
                                            class="text-sky-400">131 Studios</span>. Our
                                    website and search engine optimization (SEO) services help customers find your
                                    business on the web increasing traffic and revenue.
                                </p>
                                <div class="mt-10 sm:mt-12">
                                    <form action="{{route('site-analysis.index')}}" method="GET" class="sm:max-w-xl sm:mx-auto lg:mx-0">
                                        <div class="sm:flex">
                                            <div class="flex min-w-0 flex-1">
                                                <label for="url" class="sr-only">Website address</label>
                                                <input id="url" name="url" type="text" placeholder="yourwebsite.com"
                                                       class="block w-full px-4 py-3 rounded-md border-0 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-300 focus:ring-offset-gray-900">
                                            </div>
                                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                                <button type="submit"
                                                        class="block w-full py-3 px-4 rounded-md shadow bg-blue-500 text-white font-medium hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-300 focus:ring-offset-gray-900">
                                                    Free Site Analysis
                                                </button>
                                            </div>
                                        </div>
                                        <p class="mt-3 text-sm text-gray-300 sm:mt-4">Enter website url
                                            and get a free SEO site analysis. <a href="{{route('terms.index')}}"
                                                                                 class="font-medium text-white">terms
                                                of service</a>.</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                                <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                                     src="{{asset('images/header_image_rocket.svg')}}"
                                     alt="Hero image rocket with chat bubbles">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-12 bg-gray-50">
                <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                            What We Do
                        </h3>
                        <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
                            We get it...It can be difficult to establish your online presence. From designing your
                            website
                            or updating an existing site, there's a lot to handle. We want to make this process easy
                            for
                            you.
                        </p>
                    </div>

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

            <div class="lg:text-center mt-20 mb-10">
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    What our clients say
                </h3>
            </div>

            <section class="bg-gradient-to-b from-blue-700 to-sky-700">
                <div class="max-w-7xl mx-auto md:grid md:grid-cols-2 md:px-6 lg:px-8">
                    <div class="py-12 px-4 sm:px-6 md:flex md:flex-col md:py-16 md:pl-0 md:pr-10 md:border-r md:border-sky-700 lg:pr-16">

                        <blockquote class="mt-6 md:flex-grow md:flex md:flex-col">
                            <div class="relative text-lg font-medium text-white md:flex-grow">
                                <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-blue-800"
                                     fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                    <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                                </svg>
                                <p class="relative">
                                    {{$review->first()->text}}
                                </p>
                            </div>
                            <footer class="mt-8">
                                <div class="flex {{$review->first()->company ? 'items-start' : 'items-center'}}">
                                    <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
                                        <img class="h-12 w-12 rounded-full" src="{{$review->first()->profile_photo}}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-base font-medium text-white">{{$review->first()->author}}</div>
                                        @if($review->first()->company)
                                            <div class="text-base font-medium text-indigo-200"> {{$review->first()->position}}
                                                , {{$review->first()->company}}</div>
                                        @endif
                                    </div>
                                </div>
                            </footer>
                        </blockquote>
                    </div>
                    <div class="py-12 px-4 border-t-2 border-blue-900 sm:px-6 md:py-16 md:pr-0 md:pl-10 md:border-t-0 md:border-l lg:pl-16">
                        <blockquote class="mt-6 md:flex-grow md:flex md:flex-col">
                            <div class="relative text-lg font-medium text-white md:flex-grow">
                                <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-blue-800"
                                     fill="currentColor" viewBox="0 0 32 32">
                                    <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                                </svg>
                                <p class="relative">
                                    {{$review->last()->text}}
                                </p>
                            </div>
                            <footer class="mt-8">
                                <div class="flex {{$review->last()->company ? 'items-start' : 'items-center'}}">
                                    <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
                                        <img class="h-12 w-12 rounded-full"
                                             src="{{$review->last()->profile_photo}}"
                                             alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-base font-medium text-white">{{$review->last()->author}}</div>
                                        @if($review->last()->company)
                                            <div class="text-base font-medium text-blue-200"> {{$review->last()->position}}
                                                , {{$review->last()->company}}</div>
                                        @endif
                                    </div>
                                </div>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </section>

            <div class="bg-white pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
                <div class="relative max-w-7xl mx-auto">
                    <div class="text-center">
                        <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                            From the Blog
                        </h2>
                        <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                            We like to blog about all sorts of stuff in the development, security and design world.
                            Here's some of our recent entries.
                        </p>
                    </div>
                    <div class="mt-12 grid gap-16 border-t-2 border-gray-100 pt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
                        @foreach($blogs as $blog)
                            <x-blog-hilight :blog="$blog"/>
                        @endforeach
                    </div>
                </div>
            </div>

        </main>
    </div>
@endsection
