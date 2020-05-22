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
    <div class="hidden md:block md:ml-10 md:pr-4">
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
           class="font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Our
            Work</a>
        <a href="{{route('blog.index')}}"
           class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Blog</a>
        <a href="{{route('contact.index')}}"
           class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Contact
            Us</a>
    </div>
</nav>
