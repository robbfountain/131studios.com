<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name') }} | {{config('app.name')}}</title>

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
                                    <a class="dropdown-menu-link no-underline text-grey-darker hover:text-grey-dark" href="/website-design">Website Design</a>
                                    <a class="dropdown-menu-link no-underline text-grey-darker hover:text-grey-dark" href="/hosting">Hosting</a>
                                    <a class="dropdown-menu-link no-underline text-grey-darker hover:text-grey-dark" href="/social-media">Social Media</a>
                                    <a class="dropdown-menu-link no-underline text-grey-darker hover:text-grey-dark" href="/seo">SEO</a>
                                    <a class="dropdown-menu-link no-underline text-grey-darker hover:text-grey-dark" href="/additional-services">Additional Services</a>

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
                        <div class="mr-4 pr-4 lg:w-1/3 ">
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

                            <div class="mt-4 flex xs:flex-col lg:flex-row">
                                <a href="http://facebook.com/131studiosweb" target="_blank"
                                   class="rounded-full fb px-4 py-2 text-white no-underline lg:mr-2 xs:mb-4 lg:mb-0">
                                    <fa
                                            :icon="['fab', 'facebook-f']"></fa>
                                    Like Us on Facebook</a>

                                <a href="https://github.com/131StudiosWeb" target="_blank"
                                   class="rounded-full px-4 py-2 text-white no-underline bg-black">
                                    <fa
                                            :icon="['fab', 'github']"></fa>
                                    Github Projects</a>
                            </div>

                        </div>

                        <div class="mr-4 lg:w-1/3">
                            <h4 class="text-grey-dark text-lg xs:mt-4 lg:mt-0">Navigation</h4>
                            <div class="flex">
                                <div class="flex flex-col mr-12">
                                    <a class="no-underline text-white hover:text-grey-dark" href="#home"
                                       v-smooth-scroll="{duration: 1000}">Home
                                    </a>
                                    <a class="no-underline text-white hover:text-grey-dark" href="#about"
                                       v-smooth-scroll="{duration: 1000}">About
                                                                          Us
                                    </a>
                                    <a class="no-underline text-white hover:text-grey-dark" href="#services"
                                       v-smooth-scroll="{duration: 1000}">Services
                                    </a>
                                    <a class="no-underline text-white hover:text-grey-dark" href="#projects"
                                       v-smooth-scroll="{duration: 1000}">Our Work
                                    </a>
                                    <a class="no-underline text-white hover:text-grey-dark" href="#contact"
                                       v-smooth-scroll="{duration: 1000}">Contact
                                                                          Us
                                    </a>
                                </div>
                                <div>
                                    <div class="flex flex-col">
                                        <a class="text-white hover:text-grey-dark no-underline" href="/privacy">
                                            Privacy Policy
                                        </a>
                                        <a class="text-white hover:text-grey-dark no-underline" href="/terms">
                                            Terms of Service
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="mr-4 lg:w-1/3">
                            <h4 class="text-grey-dark text-lg xs:mt-4 lg:mt-0">Contact Us</h4>
                            <div class="text-widget">
                                <div class="mb-3">P.O. Box 704 &middot; Greencastle &middot; PA &middot; 17225</div>
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


        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            hljs.initHighlightingOnLoad();

            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5af9dcf0227d3d7edc254e50/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();

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
                    title: 'Rhodes Computer Services'
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

    </body>
</html>