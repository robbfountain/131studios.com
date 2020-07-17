@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
@endsection

@section('content')
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-screen-xl mx-auto ">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                     fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100"/>
                </svg>

                <div x-data="{open: false}">
                    <div>
                        <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
                                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                                    <div class="flex items-center justify-between w-full md:w-auto">
                                        <a href="{{route('index')}}">
                                            <img class="h-8 w-auto sm:h-10"
                                                 src="https://res.cloudinary.com/onethirtyone/image/upload/v1558561480/131%20Studios/logo-image-55x55_s72uri.png"
                                                 alt="131 Studios Logo"/>
                                        </a>
                                        <div class="-mr-2 flex items-center md:hidden">
                                            <button type="button"
                                                    @click="open = true"
                                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                                <svg class="h-6 w-6" stroke="currentColor" fill="none"
                                                     viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative hidden md:block md:ml-10 md:pr-4"
                                     x-data="{dropdownOpen : false}">
                                    <a href="#"
                                       class="font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out"
                                       @click="dropdownOpen=!dropdownOpen">
                                        Our Services
                                        <i class="far fa-chevron-down ml-1"></i>
                                    </a>
                                    <div x-show="dropdownOpen"
                                         @click.away="dropdownOpen=false"
                                         x-transition:enter="transition ease-out duration-300"
                                         x-transition:enter-start="opacity-0 transform scale-90"
                                         x-transition:enter-end="opacity-100 transform scale-100"
                                         x-transition:leave="transition ease-in duration-300"
                                         x-transition:leave-start="opacity-100 transform scale-100"
                                         x-transition:leave-end="opacity-0 transform scale-90"
                                         class="absolute p-2 bg-white shadow-lg rounded-lg"
                                         x-cloak>
                                        <div class="py-1">
                                            <a href="{{route('website-design.index')}}"
                                               class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                                <i class="fas fa-paint-brush mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500">
                                                </i>
                                                Website Design
                                            </a>
                                            <a href="{{route('hosting.index')}}"
                                               class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                                <fa class="fas fa-server mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                                    fill="currentColor"></fa>
                                                Hosting
                                            </a>
                                        </div>
                                        <div class="py-1">
                                            <a href="{{route('social-media.index')}}"
                                               class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                                <fa class="fas fa-share-alt mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                                    fill="currentColor"></fa>
                                                Social Media
                                            </a>
                                            <a href="{{route('seo.index')}}"
                                               class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                                <fa class="fas fa-search mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                                    fill="currentColor"></fa>
                                                Search Engine Optimization (SEO)
                                            </a>
                                        </div>
                                        <div class="py-1">
                                            <a href="{{route('additional-services.index')}}"
                                               class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                                <fa class="fas fa-plus mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                                    fill="currentColor"></fa>
                                                Additional Services
                                            </a>
                                        </div>
                                    </div>

                                    <a href="{{route('project.index')}}"
                                       class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Our
                                        Work</a>
                                    <a href="{{route('blog.index')}}"
                                       class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Blog</a>
                                    <a href="{{route('contact.index')}}"
                                       class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Contact
                                        Us</a>
                                </div>
                            </nav>
                        </div>

                        <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
                             x-show="open"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform scale-90"
                             x-transition:enter-end="opacity-100 transform scale-100"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100 transform scale-100"
                             x-transition:leave-end="opacity-0 transform scale-90">
                            <div class="rounded-lg shadow-md">
                                <div class="rounded-lg bg-white shadow-xs overflow-hidden">
                                    <div class="px-5 py-3 flex items-center justify-between">
                                        <div>
                                            <img class="h-8 w-auto"
                                                 src="https://res.cloudinary.com/onethirtyone/image/upload/v1586456860/131%20Studios/131-logo-160x40_ru0pze.png"
                                                 alt="131 Studios Logo"/>
                                        </div>
                                        <div class="-mr-2">
                                            <button type="button"
                                                    @click="open = false"
                                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                                <svg class="h-6 w-6" stroke="currentColor" fill="none"
                                                     viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="px-2 pt-2 pb-3">
                                        <a href="{{route('website-design.index')}}"
                                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">
                                            Website Design</a>
                                        <a href="{{route('hosting.index')}}"
                                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">
                                            Hosting</a>
                                        <a href="{{route('social-media.index')}}"
                                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">
                                            Social Media</a>
                                        <a href="{{route('seo.index')}}"
                                           class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">
                                            Search Engine Optimization (SEO)</a>
                                        <a href="{{route('additional-services.index')}}"
                                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">
                                            Additional Services
                                        </a>
                                        <a href="{{route('project.index')}}"
                                           class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">
                                            Our Work
                                        </a>
                                        <a href="{{route('blog.index')}}"
                                           class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">
                                            Blog
                                        </a>
                                        <a href="{{route('contact.index')}}"
                                           class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Contact
                                            Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                            The Local Source for
                            <br class="xl:hidden"/>
                            <span class="text-blue-600">your website needs.</span>
                        </h2>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Servicing Greencastle, Hagerstown, Waynesboro, Chambersburg and the surrounding
                            areas, we guarantee your business will stand out from your competitors with a
                            professionally designed website from <span class="text-blue-600">131
                                Studios</span>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{route('contact.index')}}"
                                   class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    Let's Get Started
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{route('services.index')}}"
                                   class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-700 bg-blue-100 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    Browse Our Services
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                 src="https://res.cloudinary.com/onethirtyone/image/upload/f_auto,q_75/v1558561494/131%20Studios/web-design-greencastle-pa_hlntpm.png"
                 alt="Web Design Greencastle PA"
            />
        </div>
    </div>

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
                <ul class="md:grid md:grid-cols-2 md:col-gap-8 md:row-gap-10">
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

    <div class="bg-white pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="relative max-w-7xl mx-auto">
            <div>
                <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    From the Blog
                </h2>
                <p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">
                    We like to blog about all sorts of stuff in the development, security and design world.
                    Here's some of our recent entries.
                </p>
            </div>
            <div class="mt-12 grid gap-16 border-t-2 border-gray-100 pt-12 lg:grid-cols-3 lg:col-gap-5 lg:row-gap-12">
                @foreach($blogs as $blog)
                    <x-blog-hilight :blog="$blog"/>
                @endforeach
            </div>
        </div>
    </div>

    <section class="py-12 bg-gray-50 overflow-hidden md:py-20 lg:py-16">
        <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <svg
                class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2"
                width="404" height="404" fill="none" viewBox="0 0 404 404" role="img"
                aria-labelledby="svg-workcation">
                <title id="svg-workcation">Workcation</title>
                <defs>
                    <pattern id="ad119f34-7694-4c31-947f-5c9d249b21f3" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#ad119f34-7694-4c31-947f-5c9d249b21f3)"/>
            </svg>

            <div class="relative">

                <img class="mx-auto"
                     src="https://res.cloudinary.com/onethirtyone/image/upload/v1586456860/131%20Studios/131-logo-160x40_ru0pze.png"
                     alt="">
                <h2 class="text-center mt-3 text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    Client Testimonials</h2>
                <blockquote class="mt-8">
                    <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                        <p>
                            &ldquo; {{$review->text}} &rdquo;
                        </p>
                    </div>
                    <footer class="mt-8">
                        <div class="md:flex md:items-center md:justify-center">
                            <div class="md:flex-shrink-0">
                                <img class="mx-auto h-10 w-10 rounded-full"
                                     src="{{$review->profile_photo}}"
                                     alt=""/>
                            </div>
                            <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                                <div class="text-base leading-6 font-medium text-gray-900">{{$review->author}}</div>

                                @if($review->company)
                                    <svg class="hidden md:block mx-1 h-5 w-5 text-blue-600"
                                         fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path d="M11 0h3L9 20H6l5-20z"/>
                                    </svg>

                                    <div class="text-base leading-6 font-medium text-gray-500">
                                        {{$review->position}}, {{$review->company}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>
@endsection
