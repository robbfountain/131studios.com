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

        <!-- Icons
        =================================================== -->
        <script src="https://kit.fontawesome.com/1e40d81b84.js" crossorigin="anonymous"></script>

        <!-- Analytics -->
        @include('frontend.partials.google-analytics')
    </head>

    <body>
        <div id="app">
            <div class="flex flex-col min-h-screen" id="home">
                <pinned class="bg-white shadow border-t-4 border-blue-400">
                    <header class="container mx-auto py-4">
                        <div class="flex xs:flex-col lg:flex-row justify-between items-center">

                            <!-- Logo -->
                            <div class="flex justify-between items-center">
                                <a href="/">
                                    <img src="/images/131-logo-210x53.png" alt="131 Studios Logo">
                                </a>
                                <a href="#" onCLic="toggleMenu()">
                                    <fa :icon="['far','bars']" size="lg" class="text-gray-700 lg:hidden xs:inline"></fa>
                                </a>
                            </div>

                            <!-- Main Navigation -->
                            <nav class="flex xs:flex-col xs:min-w-full lg:flex-row lg:min-w-0 xs:hidden lg:inline"
                                 id="menu">

                                <a href="/"
                                   class="nav-link">
                                    Home
                                </a>

                                <dropdown width="200px">
                                    <a slot="trigger" href="#"
                                       class="nav-link">
                                        Our Services
                                    </a>
                                    <a class="dropdown-menu-link text-gray-700 hover:text-gray-300"
                                       href="/website-design">Website Design</a>
                                    <a class="dropdown-menu-link text-gray-700 hover:text-gray-300"
                                       href="/hosting">Hosting</a>
                                    <a class="dropdown-menu-link  text-gray-700 hover:text-gray-300"
                                       href="/social-media">Social Media</a>
                                    <a class="dropdown-menu-link  text-gray-700 hover:text-gray-300"
                                       href="/seo">SEO</a>
                                    <a class="dropdown-menu-link  text-gray-700 hover:text-gray-300"
                                       href="/additional-services">Additional Services</a>
                                </dropdown>

                                <a href="/projects"
                                   class="nav-link">
                                    Our Work
                                </a>

                                <a href="{{route('blog.index')}}"
                                   class="nav-link">
                                    Blog
                                </a>

                                <a href="/contact"
                                   class="nav-link">
                                    Contact
                                </a>
                            </nav>
                        </div>
                    </header>
                </pinned>

                @yield('content')

                <footer>
                    <div class="container mx-auto flex justify-between w-2/3">

                        <div class="w-1/3">
                            <img src="/images/131-logo-210x53.png" alt="131 Studios Logo">
                            <div class="mt-8">
                                <ul class="flex">
                                    <li class="mr-3">
                                        <a href="/" class="hover:text-blue-200">Home</a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="/services" class="hover:text-blue-200">Services</a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="/projects" class="hover:text-blue-200">Work</a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="/blog" class="hover:text-blue-200">Blog</a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="/contact" class="hover:text-blue-200">Contact</a>
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
                            <div class="mt-6 text-gray-500">
                               131 Studios © {{ date('Y') }}
                            </div>
                        </div>
                        <div class="flex flex-col w-1/3">
                            <div class="flex items-center">
                                <div class="rounded-full bg-blue-800 mr-3 h-10 w-10">
                                   <i class="fad fa-map-marker px-3 py-2 fa-lg" style="line-height: inherit;" ></i>
                                </div>
                                <div>
                                    <div class="text-sm">
                                        545 Scarlet Circle
                                    </div>
                                    <div class="text-base -mt-1 font-semibold">
                                        Greencastle, PA
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center mt-3">
                                <div class="rounded-full bg-blue-800 mr-3 h-10 w-10">
                                    <i class="fad fa-phone px-2 py-1 fa-lg" style="line-height: inherit;" ></i>

                                </div>
                                <div>
                                    <a href="tel:3019920962" class="text-lg font-semibold hover:text-blue-200">301.992.0962</a>
                                </div>
                            </div>

                            <div class="flex items-center mt-3">
                                <div class="rounded-full bg-blue-800 mr-3 h-10 w-10">
                                    <i class="fad fa-envelope px-2 py-1 fa-lg" style="line-height: inherit;" ></i>

                                </div>
                                <div>
                                    <a href="mailto:robb@131studios.com" class="text-lg font-semibold hover:text-blue-200">robb@131studios.com</a>
                                </div>
                            </div>
                        </div>

                        <div class="w-1/3">
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
        </div>

        <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyC-rbJPsS1QcKxd4NjpFteDQdRV8u-O17M"></script>
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

        </script>
    </body>
</html>