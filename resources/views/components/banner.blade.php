<div class="relative bg-gray-50 overflow-hidden">
    <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
        <div class="relative h-full max-w-screen-xl mx-auto">
            <img class="absolute transform translate-y-1/2 -translate-x-1/3 origin-bottom-left opacity-25"
                 src="https://res.cloudinary.com/onethirtyone/image/upload/v1558561480/131%20Studios/logo-hero-2_rb9sf2.png">

            <img class="absolute left-full transform -translate-y-1/4 -translate-x-1/2 opacity-25 origin-top-right"
                 src="https://res.cloudinary.com/onethirtyone/image/upload/v1558561480/131%20Studios/logo-hero-2_rb9sf2.png">


            {{--            <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">--}}
            {{--                <defs>--}}
            {{--                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">--}}
            {{--                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />--}}
            {{--                    </pattern>--}}
            {{--                </defs>--}}
            {{--                <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />--}}
            {{--            </svg>--}}
            {{--            <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">--}}
            {{--                <defs>--}}
            {{--                    <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">--}}
            {{--                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />--}}
            {{--                    </pattern>--}}
            {{--                </defs>--}}
            {{--                <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />--}}
            {{--            </svg>--}}
        </div>
    </div>

    <div class="relative pt-6 pb-12 sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32">
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
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <drop-down>
                        <template v-slot:trigger>Our Services</template>
                        <div class="py-1">
                            <a href="{{route('website-design.index')}}"
                               class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                <fa :icon="['fas','paint-brush']"
                                    class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                    fill="currentColor"></fa>
                                Website Design
                            </a>
                            <a href="{{route('hosting.index')}}"
                               class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                <fa :icon="['fas','server']"
                                    class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                    fill="currentColor"></fa>
                                Hosting
                            </a>
                        </div>
                        <div class="py-1">
                            <a href="{{route('social-media.index')}}"
                               class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                <fa :icon="['fas','share-alt']"
                                    class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                    fill="currentColor"></fa>
                                Social Media
                            </a>
                            <a href="{{route('seo.index')}}"
                               class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                <fa :icon="['fas','search']"
                                    class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                    fill="currentColor"></fa>
                                Search Engine Optimization (SEO)
                            </a>
                        </div>
                        <div class="py-1">
                            <a href="{{route('additional-services.index')}}"
                               class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                <fa :icon="['fas','plus']"
                                    class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                    fill="currentColor"></fa>
                                Additional Services
                            </a>
                        </div>
                    </drop-down>
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
        <navigation inline-template>
            <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                <div class="rounded-lg shadow-md">
                    <div class="rounded-lg bg-white shadow-xs overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto"
                                     src="https://res.cloudinary.com/onethirtyone/image/upload/v1586456860/131%20Studios/131-logo-160x40_ru0pze.png"
                                     alt="131 Studios Logo"/>
                            </div>
                            <div class="-mr-2">
                                <button type="button"
                                        @click="isOpen = !isOpen"
                                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="px-2 pt-2 pb-3"
                        :class="{'hidden' : !isOpen}">
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
                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Additional
                                Services</a>
                            <a href="{{route('project.index')}}"
                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Our
                                Work</a>
                            <a href="{{route('blog.index')}}"
                               class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Blog</a>
                            <a href="{{route('contact.index')}}"
                               class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </navigation>
        <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-28">
            <div class="text-center">
                <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                    {{$slot}}
                    <br class="xl:hidden"/>
                    <span class="text-indigo-600">{{$titleExpanded ?? ''}}</span>
                </h2>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    {{$subtitle ?? ''}}
                </p>
                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                    {{$cta ?? ''}}
                    {{--                    <div class="rounded-md shadow">--}}
                    {{--                        <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">--}}
                    {{--                            Get started--}}
                    {{--                        </a>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">--}}
                    {{--                        <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">--}}
                    {{--                            Live demo--}}
                    {{--                        </a>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
