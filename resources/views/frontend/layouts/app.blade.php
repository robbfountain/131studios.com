<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')

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
            @yield('content')

            <footer class="bg-indigo-700 overflow-hidden text-indigo-100 border-t">
                <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                    <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                        <div class="grid xs:grid-cols-1 md:grid-cols-3 gap-8 xl:col-span-3">
                            <div class="">
                                <img src="https://res.cloudinary.com/onethirtyone/image/upload/v1586458286/131%20Studios/131-logo-dark-bg_wwbm3o.png"
                                     class="h-12" alt="131 Studios Logo">
                                <div class="mt-8">
                                    <ul class="flex">
                                        <li class="mr-3">
                                            <a href="{{route('index')}}"
                                               class="hover:text-indigo-400 transition ease-in-out duration-150">Home</a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="#top"
                                               class="hover:text-indigo-400 transition ease-in-out duration-150">Services</a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="{{route('project.index')}}"
                                               class="hover:text-indigo-400 transition ease-in-out duration-150">Work</a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="{{route('blog.index')}}"
                                               class="hover:text-indigo-400 transition ease-in-out duration-150">Blog</a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="{{route('contact.index')}}"
                                               class="hover:text-indigo-400 transition ease-in-out duration-150">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-4 flex flex-row">
                                    <a href="http://facebook.com/131studiosweb" target="_blank"
                                       class="text-gray-200 hover:text-indigo-400 transition ease-in-out duration-150 mr-2">
                                        <fa :icon="['fab', 'facebook-square']" size="2x"></fa>
                                    </a>

                                    <a href="https://twitter.com/131Studios" target="_blank"
                                       class="text-gray-200 hover:text-indigo-400 transition ease-in-out duration-150 mr-2">
                                        <fa :icon="['fab', 'twitter-square']" size="2x"></fa>
                                    </a>
                                </div>
                                <div class="mt-6 text-gray-200 tracking-wide">
                                    131 Studios © 2018 - {{ date('Y') }}
                                </div>
                            </div>

                            <div class="">
                                <div class="flex items-center">
                                    <div class="rounded-full bg-indigo-800 mr-3 h-10 w-10">
                                        <i class="fad fa-map-marker px-3 py-2 fa-lg" style="line-height: inherit;"></i>
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
                                    <div class="rounded-full bg-indigo-800 mr-3 h-10 w-10">
                                        <i class="fad fa-phone px-2 py-1 fa-lg" style="line-height: inherit;"></i>
                                    </div>
                                    <div>
                                        <a href="tel:3019920962"
                                           class="text-lg font-semibold hover:text-indigo-400 transition ease-in-out duration-150">(301)
                                            992-0962</a>
                                    </div>
                                </div>

                                <div class="flex items-center mt-4">
                                    <div class="rounded-full bg-indigo-800 mr-4 h-10 w-10">
                                        <i class="fad fa-envelope px-2 py-1 fa-lg" style="line-height: inherit;"></i>

                                    </div>
                                    <div>
                                        <a href="mailto:robb@131studios.com"
                                           class="text-lg font-semibold hover:text-indigo-400 transition ease-in-out duration-150">robb@131studios.com</a>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <h5 class="mb-3 font-semibold text-indigo-200 text-lg">About Us</h5>

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
                </div>
            </footer>

        </div>

        <script type="text/javascript" src="{{mix('js/manifest.js')}}"></script>
        <script type="text/javascript" src="{{mix('js/vendor.js')}}"></script>
        <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
        @yield('scripts','')
    </body>
</html>
