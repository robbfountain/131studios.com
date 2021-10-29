<x-app-layout>

    <x-slot name="meta">
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
    </x-slot>

    <div class="pt-10 bg-gradient-to-b from-blue-500 to-blue-700 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
        <div class="mx-auto max-w-7xl lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                    <div class="lg:py-24">
                        {{--                        <a href="#"--}}
                        {{--                           class="inline-flex items-center text-white bg-gray-800 rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">--}}
                        {{--                            <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-gradient-to-r from-blue-300 to-blue-500 rounded-full">--}}
                        {{--                                SEO Analysis</span>--}}
                        {{--                            <span class="ml-4 text-sm">Get your FREE site analysis.</span>--}}
                        {{--                            <!-- Heroicon name: solid/chevron-right -->--}}
                        {{--                            <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"--}}
                        {{--                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
                        {{--                                <path fill-rule="evenodd"--}}
                        {{--                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"--}}
                        {{--                                      clip-rule="evenodd"/>--}}
                        {{--                            </svg>--}}
                        {{--                        </a>--}}
                        <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                            <span class="block">The local source</span>
                            <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-indigo-300 to-purple-100 sm:pb-5">
                                for your business.</span>
                        </h1>
                        <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">
                            Business owners in Greencastle, Hagerstown and Chambersburg trust 131 Studios to help their
                            business succeed online.
                        </p>
                        <div class="mt-10 sm:mt-12">
                            <form action="#" class="sm:max-w-xl sm:mx-auto lg:mx-0">
                                <div class="sm:flex">
                                    <div class="min-w-0 flex-1">
                                        <label for="url" class="sr-only">Site URL</label>
                                        <input id="url" type="text" placeholder="Enter your URL"
                                               class="block w-full px-4 py-3 rounded-md border-0 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 focus:ring-offset-gray-900">
                                    </div>
                                    <div class="mt-3 sm:mt-0 sm:ml-3">
                                        <button type="submit"
                                                class="block w-full py-3 px-4 rounded-md shadow bg-blue-800 text-white font-medium hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 focus:ring-offset-gray-900">
                                            Analyze
                                        </button>
                                    </div>
                                </div>
                                <p class="mt-3 text-sm text-gray-300 sm:mt-4">Enter your website URL above and get your
                                    free site analysis.</p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                    <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                        <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
                        <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg lg:max-w-none"
                             src="{{asset('images/Illustration.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature section with screenshot -->
    <div class="relative bg-gray-50 pt-16 sm:pt-24 lg:pt-32">
        <div class="mx-auto max-w-md px-4 text-center sm:px-6 sm:max-w-3xl lg:px-8 lg:max-w-7xl">
            <div>
                <h2 class="text-base font-semibold tracking-wider text-cyan-600 uppercase">
                    Serverless</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                    No server? No problem.
                </p>
                <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
                    Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis
                    nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.
                </p>
            </div>
            <div class="mt-12 -mb-10 sm:-mb-24 lg:-mb-80">
                <img class="rounded-lg  ring-opacity-5"
                     src="{{asset('images/woman-at-desk-cartoon.jpg')}}"
                     alt="">
            </div>
        </div>
    </div>

<!-- Feature section with grid -->
    <div class="relative bg-white py-16 sm:py-24 lg:py-32">
        <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <h2 class="text-base font-semibold tracking-wider text-sky-600 uppercase">
                Services We Offer
            </h2>
            <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                Everything you need for your online business
            </p>
            <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
                Our goal is to make your business stand out on the internet. From unique, mobile-first websites to
                search engine optimizations, we help people find your business on the
                <web class=""></web>
            </p>
            <div class="mt-12">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-sky-500 to-blue-600 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/cloud-upload -->
                                        <svg class="h-6 w-6 text-white"
                                             xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor"
                                             aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Search Engine
                                    Optimization</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Local SEO, Google My Business pages, keyword optimization and search engine results
                                    pages (SERP)
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-sky-500 to-blue-600 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/lock-closed -->
                                        <svg class="h-6 w-6 text-white"
                                             xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor"
                                             aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">
                                    Web Development</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Website design, application development, mobile-first design and custom scripting.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-sky-500 to-blue-600 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/refresh -->
                                        <svg class="h-6 w-6 text-white"
                                             xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor"
                                             aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">
                                    Hosting</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    High performance virtual servers, security and access control, high-availability
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial section -->
    <div class="pb-16 bg-gradient-to-r from-sky-500 to-blue-600 lg:pb-0 lg:z-10 lg:relative">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
            <div class="relative lg:-my-8">
                <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
                    <div class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                        <img class="object-cover lg:h-full lg:w-full"
                             src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80"
                             alt="">
                    </div>
                </div>
            </div>
            <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
                    <blockquote>
                        <div>
                            <svg class="h-12 w-12 text-white opacity-25" fill="currentColor"
                                 viewBox="0 0 32 32" aria-hidden="true">
                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                            </svg>
                            <p class="mt-6 text-2xl font-medium text-white">
                                {{$review->text}}
                            </p>
                        </div>
                        <footer class="mt-6">
                            <p class="text-base font-medium text-white">{{$review->author}}</p>
                            @if($review->position)
                                <p class="text-base font-medium text-cyan-100">{{$review->position}}
                                    at {{$review->company}}</p>
                            @endif
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog section -->
    <div class="relative bg-gray-50 py-16 sm:py-24 lg:py-32">
        <div class="relative">
            <div class="text-center mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                <h2 class="text-base font-semibold tracking-wider text-cyan-600 uppercase">Learn</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                   From the Blog
                </p>
                <p class="mt-5 mx-auto max-w-prose text-xl text-gray-500">
                    We like to blog about all sorts of stuff in the development, security and design world. Here's some of our recent entries.
                </p>
            </div>
            <div class="mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl">
                @foreach($blogs as $blog)
                    <x-blog-hilight :blog="$blog"/>
                @endforeach
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="relative bg-gray-900">
        <div class="relative h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
            <img class="w-full h-full object-cover"
                 src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&sat=-100"
                 alt="">
            <div aria-hidden="true"
                 class="absolute inset-0 bg-gradient-to-r from-teal-500 to-cyan-600 mix-blend-multiply"></div>
        </div>
        <div class="relative mx-auto max-w-md px-4 py-12 sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:py-32">
            <div class="md:ml-auto md:w-1/2 md:pl-10">
                <h2 class="text-base font-semibold uppercase tracking-wider text-gray-300">
                    Award winning support
                </h2>
                <p class="mt-2 text-white text-3xl font-extrabold tracking-tight sm:text-4xl">
                    We’re here to help
                </p>
                <p class="mt-3 text-lg text-gray-300">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus
                    etiam sed. Quam a scelerisque amet ullamcorper eu enim et fermentum, augue. Aliquet
                    amet volutpat quisque ut interdum tincidunt duis.
                </p>
                <div class="mt-8">
                    <div class="inline-flex rounded-md shadow">
                        <a href="#"
                           class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">
                            Visit the help center
                            <!-- Heroicon name: solid/external-link -->
                            <svg class="-mr-1 ml-3 h-5 w-5 text-gray-400"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"/>
                                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--    @section('content')--}}
    {{--        <div class="relative bg-white overflow-hidden">--}}
    {{--            <div class="max-w-screen-xl mx-auto ">--}}
    {{--                <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">--}}
    {{--                    <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"--}}
    {{--                         fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">--}}
    {{--                        <polygon points="50,0 100,0 50,100 0,100"/>--}}
    {{--                    </svg>--}}

    {{--                    <div x-data="{open: false}">--}}
    {{--                        <div>--}}
    {{--                            <div class="relative pt-6 px-4 sm:px-6 lg:px-8">--}}
    {{--                                <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">--}}
    {{--                                    <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">--}}
    {{--                                        <div class="flex items-center justify-between w-full md:w-auto">--}}
    {{--                                            <a href="{{route('index')}}">--}}
    {{--                                                <img class="h-8 w-auto sm:h-10"--}}
    {{--                                                     src="https://res.cloudinary.com/onethirtyone/image/upload/v1558561480/131%20Studios/logo-image-55x55_s72uri.png"--}}
    {{--                                                     alt="131 Studios Logo"/>--}}
    {{--                                            </a>--}}
    {{--                                            <div class="-mr-2 flex items-center md:hidden">--}}
    {{--                                                <button type="button"--}}
    {{--                                                        @click="open = true"--}}
    {{--                                                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">--}}
    {{--                                                    <svg class="h-6 w-6" stroke="currentColor" fill="none"--}}
    {{--                                                         viewBox="0 0 24 24">--}}
    {{--                                                        <path stroke-linecap="round" stroke-linejoin="round"--}}
    {{--                                                              stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>--}}
    {{--                                                    </svg>--}}
    {{--                                                </button>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="relative hidden md:block md:ml-10 md:pr-4"--}}
    {{--                                         x-data="{dropdownOpen : false}">--}}
    {{--                                        <a href="#"--}}
    {{--                                           class="font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out"--}}
    {{--                                           @click="dropdownOpen=!dropdownOpen">--}}
    {{--                                            Our Services--}}
    {{--                                            <i class="far fa-chevron-down ml-1"></i>--}}
    {{--                                        </a>--}}
    {{--                                        <div x-show="dropdownOpen"--}}
    {{--                                             @click.away="dropdownOpen=false"--}}
    {{--                                             x-transition:enter="transition ease-out duration-300"--}}
    {{--                                             x-transition:enter-start="opacity-0 transform scale-90"--}}
    {{--                                             x-transition:enter-end="opacity-100 transform scale-100"--}}
    {{--                                             x-transition:leave="transition ease-in duration-300"--}}
    {{--                                             x-transition:leave-start="opacity-100 transform scale-100"--}}
    {{--                                             x-transition:leave-end="opacity-0 transform scale-90"--}}
    {{--                                             class="absolute p-2 bg-white shadow-lg rounded-lg"--}}
    {{--                                             x-cloak>--}}
    {{--                                            <div class="py-1">--}}
    {{--                                                <a href="{{route('website-design.index')}}"--}}
    {{--                                                   class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">--}}
    {{--                                                    <i class="fas fa-paint-brush mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500">--}}
    {{--                                                    </i>--}}
    {{--                                                    Website Design--}}
    {{--                                                </a>--}}
    {{--                                                <a href="{{route('hosting.index')}}"--}}
    {{--                                                   class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">--}}
    {{--                                                    <fa class="fas fa-server mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"--}}
    {{--                                                        fill="currentColor"></fa>--}}
    {{--                                                    Hosting--}}
    {{--                                                </a>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="py-1">--}}
    {{--                                                <a href="{{route('social-media.index')}}"--}}
    {{--                                                   class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">--}}
    {{--                                                    <fa class="fas fa-share-alt mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"--}}
    {{--                                                        fill="currentColor"></fa>--}}
    {{--                                                    Social Media--}}
    {{--                                                </a>--}}
    {{--                                                <a href="{{route('seo.index')}}"--}}
    {{--                                                   class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">--}}
    {{--                                                    <fa class="fas fa-search mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"--}}
    {{--                                                        fill="currentColor"></fa>--}}
    {{--                                                    Search Engine Optimization (SEO)--}}
    {{--                                                </a>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="py-1">--}}
    {{--                                                <a href="{{route('additional-services.index')}}"--}}
    {{--                                                   class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">--}}
    {{--                                                    <fa class="fas fa-plus mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"--}}
    {{--                                                        fill="currentColor"></fa>--}}
    {{--                                                    Additional Services--}}
    {{--                                                </a>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}

    {{--                                        <a href="{{route('project.index')}}"--}}
    {{--                                           class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Our--}}
    {{--                                            Work</a>--}}
    {{--                                        <a href="{{route('blog.index')}}"--}}
    {{--                                           class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Blog</a>--}}
    {{--                                        <a href="{{route('contact.index')}}"--}}
    {{--                                           class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Contact--}}
    {{--                                            Us</a>--}}
    {{--                                    </div>--}}
    {{--                                </nav>--}}
    {{--                            </div>--}}

    {{--                            <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"--}}
    {{--                                 x-show="open"--}}
    {{--                                 x-transition:enter="transition ease-out duration-300"--}}
    {{--                                 x-transition:enter-start="opacity-0 transform scale-90"--}}
    {{--                                 x-transition:enter-end="opacity-100 transform scale-100"--}}
    {{--                                 x-transition:leave="transition ease-in duration-300"--}}
    {{--                                 x-transition:leave-start="opacity-100 transform scale-100"--}}
    {{--                                 x-transition:leave-end="opacity-0 transform scale-90">--}}
    {{--                                <div class="rounded-lg shadow-md">--}}
    {{--                                    <div class="rounded-lg bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">--}}
    {{--                                        <div class="px-5 py-3 flex items-center justify-between">--}}
    {{--                                            <div>--}}
    {{--                                                <img class="h-8 w-auto"--}}
    {{--                                                     src="https://res.cloudinary.com/onethirtyone/image/upload/v1586456860/131%20Studios/131-logo-160x40_ru0pze.png"--}}
    {{--                                                     alt="131 Studios Logo"/>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="-mr-2">--}}
    {{--                                                <button type="button"--}}
    {{--                                                        @click="open = false"--}}
    {{--                                                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">--}}
    {{--                                                    <svg class="h-6 w-6" stroke="currentColor" fill="none"--}}
    {{--                                                         viewBox="0 0 24 24">--}}
    {{--                                                        <path stroke-linecap="round" stroke-linejoin="round"--}}
    {{--                                                              stroke-width="2" d="M6 18L18 6M6 6l12 12"/>--}}
    {{--                                                    </svg>--}}
    {{--                                                </button>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="px-2 pt-2 pb-3">--}}
    {{--                                            <a href="{{route('website-design.index')}}"--}}
    {{--                                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">--}}
    {{--                                                Website Design</a>--}}
    {{--                                            <a href="{{route('hosting.index')}}"--}}
    {{--                                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">--}}
    {{--                                                Hosting</a>--}}
    {{--                                            <a href="{{route('social-media.index')}}"--}}
    {{--                                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">--}}
    {{--                                                Social Media</a>--}}
    {{--                                            <a href="{{route('seo.index')}}"--}}
    {{--                                               class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">--}}
    {{--                                                Search Engine Optimization (SEO)</a>--}}
    {{--                                            <a href="{{route('additional-services.index')}}"--}}
    {{--                                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">--}}
    {{--                                                Additional Services--}}
    {{--                                            </a>--}}
    {{--                                            <a href="{{route('project.index')}}"--}}
    {{--                                               class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">--}}
    {{--                                                Our Work--}}
    {{--                                            </a>--}}
    {{--                                            <a href="{{route('blog.index')}}"--}}
    {{--                                               class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">--}}
    {{--                                                Blog--}}
    {{--                                            </a>--}}
    {{--                                            <a href="{{route('contact.index')}}"--}}
    {{--                                               class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Contact--}}
    {{--                                                Us--}}
    {{--                                            </a>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">--}}
    {{--                        <div class="sm:text-center lg:text-left">--}}
    {{--                            <h1 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">--}}
    {{--                                The Local Source for--}}
    {{--                                <br class="xl:hidden"/>--}}
    {{--                                <span class="text-blue-600">your website needs.</span>--}}
    {{--                            </h1>--}}
    {{--                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">--}}
    {{--                                Serving Greencastle, Hagerstown, Waynesboro, Chambersburg and the surrounding--}}
    {{--                                areas, we guarantee your business will stand out from your competitors with a--}}
    {{--                                professionally designed website from <span class="text-blue-600">131--}}
    {{--                                    Studios</span>--}}
    {{--                            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">--}}
    {{--                                <div class="rounded-md shadow">--}}
    {{--                                    <a href="{{route('contact.index')}}"--}}
    {{--                                       class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">--}}
    {{--                                        Let's Get Started--}}
    {{--                                    </a>--}}
    {{--                                </div>--}}
    {{--                                <div class="mt-3 sm:mt-0 sm:ml-3">--}}
    {{--                                    <a href="{{route('services.index')}}"--}}
    {{--                                       class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-700 bg-blue-100 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">--}}
    {{--                                        Browse Our Services--}}
    {{--                                    </a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">--}}
    {{--                @if(now()->month == 12)--}}
    {{--                    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"--}}
    {{--                         src="https://res.cloudinary.com/onethirtyone/image/upload/f_auto,q_75/v1606964876/131%20Studios/IMG_2948_ivlv7c.jpg"--}}
    {{--                         alt="Web Design Greencastle PA"--}}
    {{--                    />--}}
    {{--                @else--}}
    {{--                    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"--}}
    {{--                         src="https://res.cloudinary.com/onethirtyone/image/upload/f_auto,q_75/v1558561494/131%20Studios/web-design-greencastle-pa_hlntpm.png"--}}
    {{--                         alt="Web Design Greencastle PA"--}}
    {{--                    />--}}
    {{--                @endif--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--        <div class="py-12 bg-gray-50">--}}
    {{--            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">--}}
    {{--                <div class="lg:text-center">--}}
    {{--                    <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">--}}
    {{--                        Our Service Offerings--}}
    {{--                    </h3>--}}
    {{--                    <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">--}}
    {{--                        We get it...It can be difficult to establish your online presence. From designing your--}}
    {{--                        website--}}
    {{--                        or updating an existing site, there's a lot to handle. We want to make this process easy--}}
    {{--                        for--}}
    {{--                        you.--}}
    {{--                    </p>--}}
    {{--                </div>--}}

    {{--                <div class="mt-10">--}}
    {{--                    <ul class="md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">--}}
    {{--                        <li>--}}
    {{--                            <div class="flex">--}}
    {{--                                <div class="flex-shrink-0">--}}
    {{--                                    <div--}}
    {{--                                            class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">--}}
    {{--                                        <i class="fas fa-paint-brush"></i>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="ml-4">--}}
    {{--                                    <h5 class="text-lg leading-6 font-medium text-gray-900">Website Design</h5>--}}
    {{--                                    <p class="mt-2 text-base leading-6 text-gray-500">--}}
    {{--                                        Stand out from your competitors with a professionally designed website--}}
    {{--                                        from--}}
    {{--                                        131--}}
    {{--                                        Studios.--}}
    {{--                                    </p>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </li>--}}
    {{--                        <li class="mt-10 md:mt-0">--}}
    {{--                            <div class="flex">--}}
    {{--                                <div class="flex-shrink-0">--}}
    {{--                                    <div--}}
    {{--                                            class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">--}}
    {{--                                        <i class="fas fa-server"></i>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="ml-4">--}}
    {{--                                    <h5 class="text-lg leading-6 font-medium text-gray-900">Hosting</h5>--}}
    {{--                                    <p class="mt-2 text-base leading-6 text-gray-500">--}}
    {{--                                        Host your website on industry leading Private Servers that are 100%--}}
    {{--                                        maintained--}}
    {{--                                        by us.--}}
    {{--                                    </p>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </li>--}}
    {{--                        <li class="mt-10 md:mt-0">--}}
    {{--                            <div class="flex">--}}
    {{--                                <div class="flex-shrink-0">--}}
    {{--                                    <div--}}
    {{--                                            class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">--}}
    {{--                                        <i class="fas fa-share-alt"></i>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="ml-4">--}}
    {{--                                    <h5 class="text-lg leading-6 font-medium text-gray-900">--}}
    {{--                                        Social Media</h5>--}}
    {{--                                    <p class="mt-2 text-base leading-6 text-gray-500">--}}
    {{--                                        Get your business noticed on social networks by letting us manage you--}}
    {{--                                        social--}}
    {{--                                        media accounts.--}}
    {{--                                    </p>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </li>--}}
    {{--                        <li class="mt-10 md:mt-0">--}}
    {{--                            <div class="flex">--}}
    {{--                                <div class="flex-shrink-0">--}}
    {{--                                    <div--}}
    {{--                                            class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">--}}
    {{--                                        <i class="fas fa-search"></i>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="ml-4">--}}
    {{--                                    <h5 class="text-lg leading-6 font-medium text-gray-900">Search Engine--}}
    {{--                                        Optimization--}}
    {{--                                        (SEO)--}}
    {{--                                    </h5>--}}
    {{--                                    <p class="mt-2 text-base leading-6 text-gray-500">--}}
    {{--                                        We'll make sure your customers can find you on the web by optimizing--}}
    {{--                                        your--}}
    {{--                                        website better placement.--}}
    {{--                                    </p>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--        <div class="bg-white pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">--}}
    {{--            <div class="relative max-w-7xl mx-auto">--}}
    {{--                <div>--}}
    {{--                    <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">--}}
    {{--                        From the Blog--}}
    {{--                    </h2>--}}
    {{--                    <p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">--}}
    {{--                        We like to blog about all sorts of stuff in the development, security and design world.--}}
    {{--                        Here's some of our recent entries.--}}
    {{--                    </p>--}}
    {{--                </div>--}}
    {{--                <div class="mt-12 grid gap-16 border-t-2 border-gray-100 pt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">--}}
    {{--                    @foreach($blogs as $blog)--}}
    {{--                        <x-blog-hilight :blog="$blog"/>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}


    {{--        <section class="py-12 bg-gray-50 overflow-hidden md:py-20 lg:py-16">--}}
    {{--            <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">--}}
    {{--                <svg--}}
    {{--                        class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2"--}}
    {{--                        width="404" height="404" fill="none" viewBox="0 0 404 404" role="img"--}}
    {{--                        aria-labelledby="svg-131studios">--}}
    {{--                    <title id="svg-131studios">131 Studios</title>--}}
    {{--                    <defs>--}}
    {{--                        <pattern id="ad119f34-7694-4c31-947f-5c9d249b21f3" x="0" y="0" width="20" height="20"--}}
    {{--                                 patternUnits="userSpaceOnUse">--}}
    {{--                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>--}}
    {{--                        </pattern>--}}
    {{--                    </defs>--}}
    {{--                    <rect width="404" height="404" fill="url(#ad119f34-7694-4c31-947f-5c9d249b21f3)"/>--}}
    {{--                </svg>--}}

    {{--                <div class="relative">--}}
    {{--                    <img class="mx-auto"--}}
    {{--                         src="https://res.cloudinary.com/onethirtyone/image/upload/v1586456860/131%20Studios/131-logo-160x40_ru0pze.png"--}}
    {{--                         alt="131 Studios Logo">--}}
    {{--                    <h2 class="text-center mt-3 text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">--}}
    {{--                        Client Testimonials</h2>--}}
    {{--                    <blockquote class="mt-8">--}}
    {{--                        <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">--}}
    {{--                            <p>--}}
    {{--                                &ldquo; {{$review->text}} &rdquo;--}}
    {{--                            </p>--}}
    {{--                        </div>--}}
    {{--                        <footer class="mt-8">--}}
    {{--                            <div class="md:flex md:items-center md:justify-center">--}}
    {{--                                <div class="md:flex-shrink-0">--}}
    {{--                                    <img class="mx-auto h-10 w-10 rounded-full"--}}
    {{--                                         src="{{$review->profile_photo}}"--}}
    {{--                                         alt="{{$review->author }}'s Profile Image"/>--}}
    {{--                                </div>--}}
    {{--                                <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">--}}
    {{--                                    <div class="text-base leading-6 font-medium text-gray-900">{{$review->author}}</div>--}}

    {{--                                    @if($review->company)--}}
    {{--                                        <svg class="hidden md:block mx-1 h-5 w-5 text-blue-600"--}}
    {{--                                             fill="currentColor"--}}
    {{--                                             viewBox="0 0 20 20">--}}
    {{--                                            <path d="M11 0h3L9 20H6l5-20z"/>--}}
    {{--                                        </svg>--}}

    {{--                                        <div class="text-base leading-6 font-medium text-gray-500">--}}
    {{--                                            {{$review->position}}, {{$review->company}}--}}
    {{--                                        </div>--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </footer>--}}
    {{--                    </blockquote>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}
    {{--    @endsection--}}
</x-app-layout>
