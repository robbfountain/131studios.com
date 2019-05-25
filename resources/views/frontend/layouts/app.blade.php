<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')

        <title>{{ $title ?? config('app.name') }} </title>

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">

        <!-- Analytics -->
        @include('frontend.partials.google-analytics')
    </head>

    <body class="bg-white">
        <div id="app">
            <div class="flex flex-col min-h-screen" id="home">
                <pinned>
                    <header class="container mx-auto py-3">
                        <div class="flex xs:flex-col lg:flex-row justify-between items-center">

                            <!-- Logo -->
                            <div class="flex justify-between items-center">
                                <a href="/" class="">
                                    <img src="/images/131-logo-210x53.png" alt="131 Studios Logo">
                                </a>
                                <fa :icon="['far','bars']" size="lg" class="text-grey-darker lg:hidden xs:inline"
                                    onClick="toggleMenu()"></fa>
                            </div>

                            <!-- Main Navigation -->
                            <nav class="flex xs:flex-col xs:min-w-full lg:flex-row lg:min-w-0 xs:hidden lg:inline"
                                 id="menu">

                                <a href="/"
                                   class="no-underline uppercase text-grey-darker hover:text-grey-dark xs:mb-2 lg:mr-4 ">
                                    Home
                                </a>

                                <dropdown width="200px">
                                    <a slot="trigger" href="#"
                                       class="no-underline uppercase text-grey-darker hover:text-grey-dark xs:mb-2 lg:mr-4">
                                        Our Services
                                    </a>
                                    <a class="dropdown-menu-link no-underline text-grey-darker hover:text-grey-dark"
                                       href="/website-design">Website Design</a>
                                    <a class="dropdown-menu-link no-underline text-grey-darker hover:text-grey-dark"
                                       href="/hosting">Hosting</a>
                                    <a class="dropdown-menu-link no-underline text-grey-darker hover:text-grey-dark"
                                       href="/social-media">Social Media</a>
                                    <a class="dropdown-menu-link no-underline text-grey-darker hover:text-grey-dark"
                                       href="/seo">SEO</a>
                                    <a class="dropdown-menu-link no-underline text-grey-darker hover:text-grey-dark"
                                       href="/additional-services">Additional Services</a>
                                </dropdown>

                                <a href="/projects"
                                   class="no-underline uppercase text-grey-darker hover:text-grey-dark xs:mb-2 lg:mr-4">
                                    Our Work
                                </a>

                                <a href="{{route('blog.index')}}"
                                   class="no-underline uppercase text-grey-darker hover:text-grey-dark xs:mb-2 lg:mr-4">
                                    Blog
                                </a>

                                <a href="/contact"
                                   class="no-underline uppercase text-grey-darker hover:text-grey-dark xs:mb-2 lg:mr-4">
                                    Contact
                                </a>
                            </nav>
                        </div>
                    </header>
                </pinned>

                <div class="">
                    @yield('content')
                </div>

                <footer class="bg-blue-darker py-4 flex flex-col text-grey-light leading-normal border-t">
                    <div class="container mx-auto flex justify-between xs:flex-col lg:flex-row">
                        <div class="lg:mr-12 pr-4 lg:w-1/3 xs:w-full ">
                            <h4 class="text-grey-dark text-lg xs:mt-4 lg:mt-0">About Us</h4>
                            <p>
                                We are a local Greencastle PA company that specializes in website design, hosting,
                                social media management and SEO. We service Greencastle, Chambersburg, Waynesboro,
                                Hagerstown and the surrounding areas.
                            </p>
                            <p class="mt-4">
                                We would love the opportunity to earn your business. Give us a call or send us an <a
                                        href="/contact" class="text-grey-dark">email</a> and let us help you today.
                            </p>

                            <div class="mt-4 flex flex-row">
                                <a href="http://facebook.com/131studiosweb" target="_blank"
                                   class="text-grey-dark hover:text-grey-darker mr-2">
                                    <fa :icon="['fab', 'facebook-square']" size="2x"></fa>
                                </a>

                                <a href="http://facebook.com/131studiosweb" target="_blank"
                                   class="text-grey-dark hover:text-grey-darker">
                                    <fa :icon="['fab', 'twitter-square']" size="2x"></fa>
                                </a>
                            </div>
                            <div class="mt-4">
                                <a href="/privacy" class="no-underline text-grey-light text-sm">Privacy Policy</a>
                            </div>

                        </div>

                        <div class="mr-4 lg:pl-4 lg:w-1/3 xs:w-full">
                            <h4 class="text-grey-dark text-lg xs:mt-4 lg:mt-0">Navigation</h4>
                            <div class="flex">
                                <div class="flex flex-col mr-12">
                                    <a class="no-underline text-white hover:text-grey-dark" href="/"
                                    >Home
                                    </a>
                                    <a class="no-underline text-white hover:text-grey-dark" href="#"
                                    >Services
                                    </a>
                                    <ul class="list-reset">
                                        <li class="ml-2">
                                            <fa :icon="['far','angle-double-right']" class="mr-1"></fa>
                                            <a class="text-xs no-underline text-white hover:text-grey-dark"
                                               href="/website-design">Website Design</a></li>
                                        <li class="ml-2">
                                            <fa :icon="['far','angle-double-right']" class="mr-1"></fa>
                                            <a class="text-xs no-underline text-white hover:text-grey-dark"
                                               href="/hosting">Hosting</a></li>
                                        <li class="ml-2">
                                            <fa :icon="['far','angle-double-right']" class="mr-1"></fa>
                                            <a class="text-xs no-underline text-white hover:text-grey-dark"
                                               href="/social-media">Social Media</a></li>
                                        <li class="ml-2">
                                            <fa :icon="['far','angle-double-right']" class="mr-1"></fa>
                                            <a class="text-xs no-underline text-white hover:text-grey-dark" href="/seo">SEO</a>
                                        </li>
                                        <li class="ml-2">
                                            <fa :icon="['far','angle-double-right']" class="mr-1"></fa>
                                            <a class="text-xs no-underline text-white hover:text-grey-dark"
                                               href="/additional-services">Additional Services</a></li>
                                    </ul>
                                    <a class="no-underline text-white hover:text-grey-dark" href="/projects"
                                    >Our Work
                                    </a>
                                    <a class="no-underline text-white hover:text-grey-dark" href="/contact"
                                    >Contact
                                     Us
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="lg:mr-4 lg:w-1/3 xs:w-full">
                            <h4 class="text-grey-dark text-lg xs:mt-4 lg:mt-0">Contact Us</h4>
                            <div class="text-widget">
                                <div class="mb-3">545 Scarlet Circle &middot; Greencastle &middot; PA &middot; 17225
                                </div>
                                <div class="mb-3"> Phone: (301) 992-0962</div>
                                <div class="mb-3">E-Mail: Robb@131studios.com</div>
                            </div>
                        </div>
                    </div>
                    <!-- Copyright -->
                    <div class="text-center mt-6">
                        © Copyright {{ date('Y') }} 131 Studios. All Rights Reserved.
                    </div>
                </footer>
            </div>
        </div>

        <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyC-rbJPsS1QcKxd4NjpFteDQdRV8u-O17M"></script>
        <script src="https://player.vimeo.com/api/player.js"></script>

        <!--Start of Tawk.to Script-->
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

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>