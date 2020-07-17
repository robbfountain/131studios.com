@props(['condensed' => false,])

<div class="relative bg-gray-50">
    @if(!$condensed)
        <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
            <div class="relative h-full max-w-screen-xl mx-auto">
                <img
                    class="h-128 absolute left-full transform translate-y-1/2 -translate-x-1/2 origin-bottom-left opacity-10"
                    src="https://res.cloudinary.com/onethirtyone/image/upload/v1558561480/131%20Studios/logo-hero-2_rb9sf2.png"
                    alt="131 Studios Logo">

                <img
                    class="h-128 absolute top-0 transform translate-y-0 translate-x-1/4 origin-top-left opacity-10"
                    src="https://res.cloudinary.com/onethirtyone/image/upload/v1558561480/131%20Studios/logo-hero-2_rb9sf2.png"
                    alt="131 Studios Logo">
            </div>
        </div>
    @endif

    <div class="relative pt-6 {{$condensed ? 'sm:pb-12' : 'sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32'}}"
         x-data="{open : false}">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
                <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="{{route('index')}}">
                            <img class="h-8 w-auto sm:h-10"
                                 src="https://res.cloudinary.com/onethirtyone/image/upload/v1558561480/131%20Studios/logo-image-55x55_s72uri.png"
                                 alt="131 Studios Logo"/>
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button type="button"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                                    @click="open = !open">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block relative"
                     x-data="{open : false}">
                    <a href="#"
                       class="ml-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out"
                       @click="open=!open">
                        Our Services
                        <i class="ml-1 far fa-chevron-down"></i>
                    </a>
                    <div x-show="open"
                         @click.away="open = false"
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
                                <i class="fas fa-paint-brush mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                ></i>
                                Website Design
                            </a>
                            <a href="{{route('hosting.index')}}"
                               class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                <i class="fas fa-server mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                ></i>
                                Hosting
                            </a>
                        </div>
                        <div class="py-1">
                            <a href="{{route('social-media.index')}}"
                               class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                <i class="fas fa-share-alt mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                ></i>
                                Social Media
                            </a>
                            <a href="{{route('seo.index')}}"
                               class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                <i class="fas fa-search mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                ></i>
                                Search Engine Optimization (SEO)
                            </a>
                        </div>
                        <div class="py-1">
                            <a href="{{route('additional-services.index')}}"
                               class="group flex items-center px-4 py-2 text-sm leading-5 rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                <i class="fas fa-plus mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                ></i>
                                Additional Services
                            </a>
                        </div>
                    </div>
                    <a href="{{route('project.index')}}"
                       class="ml-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Our
                        Work</a>
                    <a href="{{route('blog.index')}}"
                       class="ml-10 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Blog</a>
                    <a href="{{route('contact.index')}}"
                       class="ml-10 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Contact
                        Us</a>
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
        <div x-show="open"
             @click.away="open = false"
             x-transition:enter="transition ease-out duration-150"
             x-transition:enter-start="opacity-0 transform scale-95"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-100"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-95"
        >
            <div class="absolute top-0 inset-x-0 p-2 md:hidden z-10">
                <div class="rounded-lg bg-white shadow-md">
                    <div class="px-5 pt-4 flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto"
                                 src="https://res.cloudinary.com/onethirtyone/image/upload/v1586456860/131%20Studios/131-logo-160x40_ru0pze.png"
                                 alt="131 Studios Logo"/>
                        </div>
                        <div class="-mr-2">
                            <button type="button"
                                    @click="open = false"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="px-2 pt-2 pb-3">
                        <a href="{{route('additional-services.index')}}"
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Our
                            Services</a>
                        <a href="{{route('project.index')}}"
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Our
                            Work</a>
                        <a href="{{route('blog.index')}}"
                           class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">
                            Blog
                        </a>
                        <a href="{{route('contact.index')}}"
                           class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
        @if(!$condensed)
            <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-28">
                <div class="text-center">
                    <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                        {{$slot}}
                        <br class="xl:hidden"/>
                        <span class="text-blue-600">{{$titleExpanded ?? ''}}</span>
                    </h2>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        {{$subtitle ?? ''}}
                    </p>
                    <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                        {{$cta ?? ''}}
                        {{--                    <div class="rounded-md shadow">--}}
                        {{--                        <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">--}}
                        {{--                            Get started--}}
                        {{--                        </a>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">--}}
                        {{--                        <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-600 bg-white hover:text-blue-500 focus:outline-none focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">--}}
                        {{--                            Live demo--}}
                        {{--                        </a>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
