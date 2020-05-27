<div class="z-20 relative bg-gray-50 overflow-hidden">
    <div class="relative pt-6 pb-6 sm:pb-6 md:pb-6 lg:pb-6 xl:pb-6">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
                <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="{{route('index')}}">
                            <img class="h-8 w-auto sm:h-10"
                                 src="https://res.cloudinary.com/onethirtyone/image/upload/v1558561480/131%20Studios/logo-image-55x55_s72uri.png" alt="131 Studios Logo" />
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
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
                    <a href="{{route('project.index')}}" class="ml-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Our Work</a>
                    <a href="{{route('blog.index')}}" class="ml-10 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Blog</a>
                    <a href="{{route('contact.index')}}" class="ml-10 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Contact Us</a>
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
                            <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Additional
                            Services</a>
                        <a href="{{route('project.index')}}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Our Work</a>
                        <a href="{{route('blog.index')}}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Blog</a>
                        <a href="{{route('contact.index')}}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
