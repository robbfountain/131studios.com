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


    <script src="https://kit.fontawesome.com/1e40d81b84.js" crossorigin="anonymous"></script>


    <!-- Analytics -->
    @include('frontend.partials.google-analytics')
</head>

<body class="bg-gray-100">
<div id="app">
    <div class="flex flex-col min-h-screen" id="home">
        <pinned class="bg-white shadow">
            <header class="container mx-auto py-4">
                <div class="flex xs:flex-col lg:flex-row justify-between items-center">

                    <!-- Logo -->
                    <div class="flex justify-between items-center">
                        <a href="/" class="">
                            <img src="/images/131-logo-210x53.png" alt="131 Studios Logo">
                        </a>
                        <fa :icon="['far','bars']" size="lg" class="text-gray-700 lg:hidden xs:inline"
                            onClick="toggleMenu()"></fa>
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

        <div class="">
            @yield('content')
        </div>

        <footer class="bg-blue-900 py-4 flex flex-col text-blue-100 leading-normal border-t">
            <div class="container mx-auto flex justify-between xs:flex-col lg:flex-row">
                <div class="lg:mr-12 pr-4 lg:w-1/3 xs:w-full ">
                    <h4 class="text-blue-100 text-lg xs:mt-4 lg:mt-0 font-semibold">About Us</h4>
                    <p>
                        We are a local Greencastle PA company that specializes in website design, hosting,
                        social media management and SEO. We service Greencastle, Chambersburg, Waynesboro,
                        Hagerstown and the surrounding areas.
                    </p>
                    <p class="mt-4">
                        We would love the opportunity to earn your business. Give us a call or send us an <a
                                href="/contact" class="text-gray-300">email</a> and let us help you today.
                    </p>

                    <div class="mt-4 flex flex-row">
                        <a href="http://facebook.com/131studiosweb" target="_blank"
                           class="text-gray-300 hover:text-gray-700 mr-2">
                            <fa :icon="['fab', 'facebook-square']" size="2x"></fa>
                        </a>

                        <a href="https://twitter.com/131Studios" target="_blank"
                           class="text-gray-300 hover:text-gray-700">
                            <fa :icon="['fab', 'twitter-square']" size="2x"></fa>
                        </a>
                    </div>
                    <div class="mt-4">
                        <a href="/privacy" class=" text-gray-400 text-sm">Privacy Policy</a>
                    </div>

                </div>

                <div class="mr-4 lg:pl-4 lg:w-1/3 xs:w-full">
                    <h4 class="text-blue-100 text-lg xs:mt-4 lg:mt-0 font-semibold">Navigation</h4>
                    <div class="flex">
                        <div class="mr-12">
                            <ul>
                                <li>
                                    <fa :icon="['far','angle-right']" class="mr-1"></fa>
                                    <a class="ml-1 text-blue-100 hover:text-gray-300" href="/">Home
                                    </a>
                                </li>
                                <li>
                                    <fa :icon="['far','angle-right']" class="mr-1"></fa>
                                    <a class="ml-1 text-blue-100 hover:text-gray-300" href="#"
                                    >Services
                                    </a>
                                </li>
                                <ul>
                                    <li class="ml-2">
                                        <fa :icon="['far','angle-double-right']" class="mr-1"></fa>
                                        <a class="  text-blue-100 hover:text-gray-300"
                                           href="/website-design">Website Design</a></li>
                                    <li class="ml-2">
                                        <fa :icon="['far','angle-double-right']" class="mr-1"></fa>
                                        <a class=" text-blue-100 hover:text-gray-300"
                                           href="/hosting">Hosting</a></li>
                                    <li class="ml-2">
                                        <fa :icon="['far','angle-double-right']" class="mr-1"></fa>
                                        <a class="  text-blue-100 hover:text-gray-300"
                                           href="/social-media">Social Media</a></li>
                                    <li class="ml-2">
                                        <fa :icon="['far','angle-double-right']" class="mr-1"></fa>
                                        <a class="  text-blue-100 hover:text-gray-300" href="/seo">SEO</a>
                                    </li>
                                    <li class="ml-2">
                                        <fa :icon="['far','angle-double-right']" class="mr-1"></fa>
                                        <a class="  text-blue-100 hover:text-gray-300"
                                           href="/additional-services">Additional Services</a></li>
                                </ul>
                                <li>
                                    <fa :icon="['far','angle-right']" class="mr-1"></fa>
                                    <a class=" text-blue-100 hover:text-gray-300" href="/projects"
                                    >Our Work
                                    </a>
                                </li>
                                <li>
                                    <fa :icon="['far','angle-right']" class="mr-1"></fa>
                                    <a class=" text-blue-100 hover:text-gray-300" href="/blog"
                                    >Blog
                                    </a>
                                </li>
                                <li>
                                    <fa :icon="['far','angle-right']" class="mr-1"></fa>
                                    <a class=" text-blue-100 hover:text-gray-300" href="/contact"
                                    >Contact
                                        Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="lg:mr-4 lg:w-1/3 xs:w-full">
                    <h4 class="text-blue-100 text-lg xs:mt-4 lg:mt-0 font-semibold">Contact Us</h4>
                    <div class="text-widget">
                        <div class="mb-2">545 Scarlet Circle &middot; Greencastle &middot; PA &middot; 17225
                        </div>
                        <div class="mb-2"> Phone: (301) 992-0962</div>
                        <div class="mb-2">E-Mail: Robb@131studios.com</div>
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