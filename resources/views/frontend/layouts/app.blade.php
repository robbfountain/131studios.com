<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta','')
        <title>{{ $title ?? config('app.name') }} </title>

        <!-- Webmentions -->
        <link href="https://twitter.com/131studios" rel="me"/>
        <link rel="webmention" href="https://webmention.io/131studios.com/webmention"/>
        <link rel="pingback" href="https://webmention.io/131studios.com/xmlrpc"/>

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <link rel="stylesheet"
              href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/styles/tomorrow-night-bright.min.css">

        <!-- LIVEWIRE
        ================================================== -->
        @livewireStyles

    <!-- Alpine Plugins -->
        <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>


        <!-- AlpineJs
            ================================================== -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- HilightJs
       ================================================== -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>

        <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

        @stack('scripts')

    <!-- Analytics -->
        @include('frontend.partials.google-analytics')

    </head>

    <body>
        @yield('content')

        <footer class="bg-gradient-to-b from-blue-700 to-sky-700 overflow-hidden text-blue-100 border-t">
            <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <div class="grid lg:grid-cols-3 gap-8 xl:col-span-3">
                    <div class="">
                        <img
                                src="https://res.cloudinary.com/onethirtyone/image/upload/v1586458286/131%20Studios/131-logo-dark-bg_wwbm3o.png"
                                class="h-12" alt="131 Studios Logo">
                        <div class="mt-8">
                            <ul class="flex">
                                <li class="mr-3">
                                    <a href="{{route('index')}}"
                                       class="hover:text-blue-400 transition ease-in-out duration-150">Home</a>
                                </li>
                                <li class="mr-3">
                                    <a href="{{route('services.index')}}"
                                       class="hover:text-blue-400 transition ease-in-out duration-150">Services</a>
                                </li>
                                <li class="mr-3">
                                    <a href="{{route('project.index')}}"
                                       class="hover:text-blue-400 transition ease-in-out duration-150">Projects</a>
                                </li>
                                <li class="mr-3">
                                    <a href="{{route('blog.index')}}"
                                       class="hover:text-blue-400 transition ease-in-out duration-150">Blog</a>
                                </li>
                                <li class="mr-3">
                                    <a href="{{route('contact.index')}}"
                                       class="hover:text-blue-400 transition ease-in-out duration-150">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-4 flex flex-row">
                            <a href="http://facebook.com/131studiosweb" target="_blank"
                               class="text-gray-200 hover:text-blue-400 transition ease-in-out duration-150 mr-2">
                                <i class="fab fa-facebook-square fa-2x"></i>
                            </a>

                            <a href="https://twitter.com/131Studios" target="_blank"
                               class="text-gray-200 hover:text-blue-400 transition ease-in-out duration-150 mr-2">
                                <i class="fab fa-twitter-square fa-2x"></i>
                            </a>
                        </div>
                        <div class="mt-6 text-gray-200 tracking-wide">
                            131 Studios © 2018 - {{ date('Y') }}
                        </div>
                    </div>

                    <div class="">
                        <div class="flex items-center">
                            <span class="rounded-full bg-blue-800 h-10 w-10 flex items-center justify-center ring-2 ring-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </span>
                            <div class="ml-3">
                                <div class="text-sm font-semibold">
                                    545 Scarlet Circle
                                </div>
                                <div class="text-sm -mt-1 font-semibold">
                                    Greencastle, PA
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center mt-4">
                            <div class="rounded-full bg-blue-800 h-10 w-10 flex items-center justify-center ring-2 ring-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <a href="tel:3019920962"
                                   class="text-lg font-semibold hover:text-blue-400 transition ease-in-out duration-150">(301)
                                    992-0962</a>
                            </div>
                        </div>

                        <div class="flex items-center mt-4">
                            <div class="rounded-full bg-blue-800 h-10 w-10 flex items-center justify-center ring-2 ring-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <a href="mailto:robb@131studios.com"
                                   class="text-lg font-semibold hover:text-blue-400 transition ease-in-out duration-150">robb@131studios.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <h5 class="mb-3 font-semibold text-blue-200 text-lg">About Us</h5>

                        <p class="text-blue">We are a local Greencastle, PA company that specializes in website
                            design,
                            hosting,
                            social
                            media management and SEO. We service Greencastle, Chambersburg, Waynesboro,
                            Hagerstown
                            and the surrounding areas.</p>

                        <p class="mt-3">We would love the opportunity to earn your business. Give us a call or
                            send
                            us
                            an email
                            and let us help you today.</p>
                    </div>
                </div>
            </div>
        </footer>

        @livewireScripts
        @stack('scripts')
    </body>
</html>
