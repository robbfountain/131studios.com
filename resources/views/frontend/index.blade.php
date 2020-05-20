<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description"
              content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>

        <title>{{ $title ?? config('app.name') }} </title>

        <!-- Webmentions -->
        <link href="https://twitter.com/131studios" rel="me"/>
        <link rel="webmention" href="https://webmention.io/131studios.com/webmention"/>
        <link rel="pingback" href="https://webmention.io/131studios.com/xmlrpc"/>

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">

        <!-- Icons
        =================================================== -->
        <script src="https://kit.fontawesome.com/1e40d81b84.js" crossorigin="anonymous"></script>

        <!-- Analytics -->
        @include('frontend.partials.google-analytics')

    </head>

    <body>
        <div id="app">
            <div class="relative bg-white overflow-hidden">
                <div class="max-w-screen-xl mx-auto ">
                    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                        <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                             fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                            <polygon points="50,0 100,0 50,100 0,100"/>
                        </svg>

                        <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
                                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                                    <div class="flex items-center justify-between w-full md:w-auto">
                                        <a href="{{route('index')}}">
                                            <img class="h-8 w-auto sm:h-10" src="https://res.cloudinary.com/onethirtyone/image/upload/v1558561480/131%20Studios/logo-image-55x55_s72uri.png"
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
                                    <a href="#"
                                       class="font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Our Services</a>
                                    <a href="{{route('project.index')}}"
                                       class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Our Work</a>
                                    <a href="{{route('blog.index')}}"
                                       class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Blog</a>
                                    <a href="{{route('contact.index')}}"
                                       class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Contact Us</a>
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
                                            <img class="h-8 w-auto" src="https://res.cloudinary.com/onethirtyone/image/upload/v1586456860/131%20Studios/131-logo-160x40_ru0pze.png" alt="131 Studios Logo"/>
                                        </div>
                                        <div class="-mr-2">
                                            <button type="button"
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
                                        <a href="#"
                                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Our Services</a>
                                        <a href="{{route('project.index')}}"
                                           class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Our Work</a>
                                        <a href="{{route('blog.index')}}"
                                           class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Blog</a>
                                        <a href="{{route('contact.index')}}"
                                           class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                            <div class="sm:text-center lg:text-left">
                                <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                                    Let us design
                                    <br class="xl:hidden"/>
                                    <span class="text-indigo-600">your website.</span>
                                </h2>
                                <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                    Servicing Greencastle, Hagerstown, Waynesboro, Chambersburg and the surrounding areas, we guarantee your business will stand out from your competitors with a professionally designed website from <span class="text-indigo-600">131 Studios</span>.
                                </p>
                                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                    <div class="rounded-md shadow">
                                        <a href="{{route('contact.index')}}"
                                           class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                            Let's Get Started
                                        </a>
                                    </div>
                                    <div class="mt-3 sm:mt-0 sm:ml-3">
                                        <a href="{{route('contact.index')}}"
                                           class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
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
                         alt=""/>
                </div>
            </div>


            <div class="py-12 bg-white">
                <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <p class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Transactions</p>
                        <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                            A better way to send money
                        </h3>
                        <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
                            Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
                        </p>
                    </div>

                    <div class="mt-10">
                        <ul class="md:grid md:grid-cols-2 md:col-gap-8 md:row-gap-10">
                            <li>
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h5 class="text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</h5>
                                        <p class="mt-2 text-base leading-6 text-gray-500">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-10 md:mt-0">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h5 class="text-lg leading-6 font-medium text-gray-900">No hidden fees</h5>
                                        <p class="mt-2 text-base leading-6 text-gray-500">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-10 md:mt-0">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h5 class="text-lg leading-6 font-medium text-gray-900">Transfers are instant</h5>
                                        <p class="mt-2 text-base leading-6 text-gray-500">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-10 md:mt-0">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h5 class="text-lg leading-6 font-medium text-gray-900">Mobile notifications</h5>
                                        <p class="mt-2 text-base leading-6 text-gray-500">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <section class="py-12 bg-gray-50 overflow-hidden md:py-20 lg:py-24">
                <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <svg class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" role="img" aria-labelledby="svg-workcation">
                        <title id="svg-workcation">Workcation</title>
                        <defs>
                            <pattern id="ad119f34-7694-4c31-947f-5c9d249b21f3" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="404" fill="url(#ad119f34-7694-4c31-947f-5c9d249b21f3)" />
                    </svg>

                    <div class="relative">
                        <svg class="mx-auto h-10" fill="none" viewBox="0 0 180 40">
                            <path fill="#2D3748" d="M59.267 32.642h3.718L66.087 21.7l3.126 10.94h3.718l4.642-16.576h-3.434l-3.173 12.29-3.481-12.29H64.69l-3.457 12.29-3.174-12.29h-3.433l4.641 16.576zM83.551 32.973c3.481 0 6.276-2.723 6.276-6.252 0-3.528-2.794-6.252-6.276-6.252-3.48 0-6.252 2.724-6.252 6.252 0 3.529 2.771 6.252 6.252 6.252zm0-2.984c-1.8 0-3.197-1.35-3.197-3.268 0-1.918 1.398-3.268 3.197-3.268 1.824 0 3.221 1.35 3.221 3.268 0 1.918-1.397 3.268-3.22 3.268zM95.031 22.837v-2.036h-3.055v11.84h3.055v-5.66c0-2.486 2.013-3.196 3.6-3.007v-3.41c-1.492 0-2.984.663-3.6 2.273zM111.334 32.642l-4.902-5.992 4.76-5.85h-3.647l-4.073 5.21v-9.946h-3.055v16.578h3.055v-5.376l4.31 5.376h3.552z" />
                            <path fill="#5850EC" fill-rule="evenodd" d="M42.342 17.45l-7.596-4.385v20.371h8.88v1.974H.21v-1.974h3.947v-12.55l-3.678.92L0 19.89l20.81-5.202h3.08a9.421 9.421 0 00-.67 2.525l-.477 3.922 5.096-2.942v15.243h4.933v-20.37l-7.594 4.385a7.402 7.402 0 012.531-4.736h-4.064a7.39 7.39 0 016.557-2.933l-5.517-3.186a7.388 7.388 0 016.607.397 7.366 7.366 0 012.468 2.316 7.363 7.363 0 012.467-2.316 7.39 7.39 0 016.608-.397l-5.518 3.186a7.389 7.389 0 016.558 2.933h-4.066a7.399 7.399 0 012.533 4.735zm-18.45 6.119h-5.92v9.867h5.92v-9.867zm-10.854 1.973a1.974 1.974 0 11-3.947 0 1.974 1.974 0 013.947 0z" clip-rule="evenodd" />
                            <path fill="#5850EC" d="M118.495 32.973c2.321 0 4.334-1.232 5.352-3.079l-2.652-1.515c-.474.97-1.492 1.563-2.723 1.563-1.824 0-3.174-1.35-3.174-3.221 0-1.895 1.35-3.244 3.174-3.244 1.207 0 2.226.615 2.699 1.586l2.629-1.54c-.971-1.823-2.984-3.054-5.305-3.054-3.599 0-6.252 2.723-6.252 6.252 0 3.528 2.653 6.252 6.252 6.252zM134.277 20.8v1.398c-.853-1.066-2.131-1.729-3.86-1.729-3.15 0-5.755 2.723-5.755 6.252 0 3.528 2.605 6.252 5.755 6.252 1.729 0 3.007-.663 3.86-1.729v1.397h3.055v-11.84h-3.055zm-3.292 9.26c-1.871 0-3.268-1.35-3.268-3.34 0-1.988 1.397-3.338 3.268-3.338 1.895 0 3.292 1.35 3.292 3.339 0 1.99-1.397 3.339-3.292 3.339zM146.875 23.737v-2.936h-2.676v-3.316l-3.055.924V20.8h-2.06v2.936h2.06v4.926c0 3.197 1.445 4.452 5.731 3.978v-2.77c-1.752.094-2.676.07-2.676-1.208v-4.926h2.676zM150.544 19.38c1.042 0 1.895-.853 1.895-1.871s-.853-1.895-1.895-1.895c-1.018 0-1.87.877-1.87 1.895a1.89 1.89 0 001.87 1.87zm-1.515 13.261h3.055v-11.84h-3.055v11.84zM160.516 32.973c3.481 0 6.276-2.724 6.276-6.252 0-3.529-2.795-6.252-6.276-6.252s-6.252 2.723-6.252 6.252c0 3.528 2.771 6.252 6.252 6.252zm0-2.984c-1.8 0-3.197-1.35-3.197-3.268 0-1.918 1.397-3.268 3.197-3.268 1.824 0 3.221 1.35 3.221 3.268 0 1.918-1.397 3.268-3.221 3.268zM175.524 20.469c-1.586 0-2.818.592-3.528 1.658V20.8h-3.055v11.84h3.055v-6.394c0-2.06 1.113-2.936 2.605-2.936 1.373 0 2.344.829 2.344 2.439v6.891H180v-7.27c0-3.15-1.966-4.902-4.476-4.902z" />
                        </svg>
                        <blockquote class="mt-8">
                            <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                                <p>
                                    &ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis.&rdquo;
                                </p>
                            </div>
                            <footer class="mt-8">
                                <div class="md:flex md:items-center md:justify-center">
                                    <div class="md:flex-shrink-0">
                                        <img class="mx-auto h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                    </div>
                                    <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                                        <div class="text-base leading-6 font-medium text-gray-900">Judith Black</div>

                                        <svg class="hidden md:block mx-1 h-5 w-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M11 0h3L9 20H6l5-20z" />
                                        </svg>

                                        <div class="text-base leading-6 font-medium text-gray-500">CEO, Workcation</div>
                                    </div>
                                </div>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </section>

            <footer>
                <div class="container mx-auto flex xs:flex-col-reverse lg:flex-row justify-between xs:w-full lg:w-2/3">
                    <div class="xs:w-full lg:w-1/3 xs:mb-6 lg:mb-0 md:px-4">
                        <img src="https://res.cloudinary.com/onethirtyone/image/upload/v1586458286/131%20Studios/131-logo-dark-bg_wwbm3o.png" class="h-12" alt="131 Studios Logo">
                        <div class="mt-8">
                            <ul class="flex">
                                <li class="mr-3">
                                    <a href="{{route('index')}}" class="hover:text-blue-200">Home</a>
                                </li>
                                <li class="mr-3">
                                    <a href="#top" class="hover:text-blue-200">Services</a>
                                </li>
                                <li class="mr-3">
                                    <a href="{{route('project.index')}}" class="hover:text-blue-200">Work</a>
                                </li>
                                <li class="mr-3">
                                    <a href="{{route('blog.index')}}" class="hover:text-blue-200">Blog</a>
                                </li>
                                <li class="mr-3">
                                    <a href="{{route('contact.index')}}" class="hover:text-blue-200">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-4 flex flex-row">
                            <a href="http://facebook.com/131studiosweb" target="_blank"
                               class="text-gray-500 hover:text-gray-200 mr-2">
                                <fa :icon="['fab', 'facebook-square']" size="2x"></fa>
                            </a>

                            <a href="https://twitter.com/131Studios" target="_blank"
                               class="text-gray-500 hover:text-gray-200">
                                <fa :icon="['fab', 'twitter-square']" size="2x"></fa>
                            </a>
                        </div>
                        <div class="mt-6 text-gray-500 tracking-wide">
                            131 Studios © {{ date('Y') }}
                        </div>
                    </div>
                    <div class="flex flex-col xs:w-full lg:w-1/3 xs:mb-6 lg:mb-0 lg:px-4">
                        <div class="flex items-center">
                            <div class="rounded-full bg-blue-800 mr-3 h-10 w-10">
                                <i class="fad fa-map-marker px-3 py-2 fa-lg" style="line-height: inherit;" ></i>
                            </div>
                            <div>
                                <div class="text-sm">
                                    545 Scarlet Circle
                                </div>
                                <div class="text-sm -mt-1 font-semibold">
                                    Greencastle, PA
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center mt-4">
                            <div class="rounded-full bg-blue-800 mr-3 h-10 w-10">
                                <i class="fad fa-phone px-2 py-1 fa-lg" style="line-height: inherit;" ></i>
                            </div>
                            <div>
                                <a href="tel:3019920962" class="text-lg font-semibold hover:text-blue-200">(301) 992-0962</a>
                            </div>
                        </div>

                        <div class="flex items-center mt-4">
                            <div class="rounded-full bg-blue-800 mr-4 h-10 w-10">
                                <i class="fad fa-envelope px-2 py-1 fa-lg" style="line-height: inherit;" ></i>

                            </div>
                            <div>
                                <a href="mailto:robb@131studios.com" class="text-lg font-semibold hover:text-blue-200">robb@131studios.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="xs:w-full lg:w-1/3 xs:mb-6 lg:mb-0">
                        <h5 class="mb-3 font-semibold text-blue-200 text-lg">About Us</h5>
                        <p>We are a local Greencastle, PA company that specializes in website design, hosting, social
                            media management and SEO. We service Greencastle, Chambersburg, Waynesboro, Hagerstown
                            and the surrounding areas.</p>

                        <p class="mt-3">We would love the opportunity to earn your business. Give us a call or send us an email
                            and let us help you today.</p>
                    </div>
                </div>
            </footer>

        </div>

        <script type="text/javascript" src="{{mix('js/manifest.js')}}"></script>
        <script type="text/javascript" src="{{mix('js/vendor.js')}}"></script>
        <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key={{env('GOOGLE_API_KEY')}}"></script>
        <script src="https://player.vimeo.com/api/player.js"></script>

        <script type="text/javascript">
            function toggleMenu() {
                var element = document.getElementById('menu');
                if (element.classList.contains('xs:hidden')) {
                    element.classList.remove('xs:hidden');
                } else {
                    element.classList.add('xs:hidden');
                }
            }

            function initialize() {
                var myLatLng = {lat: 39.7904, lng: -77.7278};

                var map = new google.maps.Map(document.getElementById('map_canvas'), {
                    zoom: 8,
                    center: myLatLng
                });

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: '131 Studios'
                });
            }

            if (document.getElementById("map_canvas")) {
                google.maps.event.addDomListener(window, 'load', initialize);
            }

            var player = new Vimeo.Player('intro-video');
            var videoId;
            player.getVideoId().then((id) => {
                videoId = id;
            })

            player.on('play', () => {
                axios.post('/stats/videos/' + videoId + '/views');
            });
        </script>
    </body>
</html>
