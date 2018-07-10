<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name')}}</title>

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="/css/app.css">

        <!-- Analytics -->
        @include('frontend.partials.google-analytics')

    </head>
    <body class="">
        <div id="app">
            <div class="flex flex-col min-h-screen">
                <header class="border-b border-grey-dark py-6 bg-blue-darker">
                    <div class="container mx-auto">
                        <div class="flex xs:flex-col lg:flex-row justify-between items-center">
                            <!-- Logo -->
                            <div class="text-xl ">
                                <a href="/" class="text-white no-underline flex items-center">
                                    <img src="/images/logo-image-30x30.png" class="rounded-full p-1 bg-white mr-2">
                                    <span>131 Studios</span>
                                </a>

                            </div>

                            <!-- Main Navigation -->
                            <nav class="flex xs:flex-col lg:flex-row xs:min-w-full lg:min-w-0 lg:bg-transparent xs:px-2">
                                <div class="xs:mb-4">
                                    <router-link to="/"
                                                 class="lg:mr-4 no-underline uppercase lg:border-b-4 border-transparent text-white lg:hover:border-blue-darkest hover:text-blue-darkest lg:pb-8">Home
                                    </router-link>

                                </div>
                                <div>
                                    <router-link to="/about"
                                                 class="mr-4 no-underline uppercase border-b-4 border-transparent text-white hover:border-blue-darkest hover:text-blue-darkest pb-8">About
                                    </router-link>

                                </div>
                                <div>
                                    <router-link to="/services"
                                                 class="mr-4 no-underline uppercase border-b-4 border-transparent text-white hover:border-blue-darkest hover:text-blue-darkest pb-8">Services
                                    </router-link>

                                </div>
                                <div>
                                    <router-link to="/work"
                                                 class="mr-4 no-underline uppercase border-b-4 border-transparent text-white hover:border-blue-darkest hover:text-blue-darkest pb-8">Our Work
                                    </router-link>

                                </div>
                                <div>
                                    <router-link to="/contact"
                                                 class="mr-4 no-underline uppercase border-b-4 border-transparent text-white hover:border-blue-darkest hover:text-blue-darkest pb-8">Contact
                                    </router-link>

                                </div>
                            </nav>
                        </div>
                    </div>
                </header>

                <div class="flex-1">
                    <router-view ></router-view>
                </div>

                <footer class="bg-blue-darker py-4 flex flex-col text-grey-light text-sm leading-normal">
                    <div class="container mx-auto flex justify-between">
                        <div class="w-1/3 pr-4">
                            <h4>About Us</h4>
                            <p>131 Studios is a Web Development and IT Consulting company in Pennsylvania. We specialize in
                                writing top-notch web applications as well as offer superb IT consulting services.</p>
                            <p> We have over 15 years of experience providing high level products and services.</p>

                            <a href="http://facebook.com/131studiosweb" target="_blank" class=""><i
                                        class="fa fa-facebook-official"></i> Like Us on Facebook</a>

                            <a href="https://github.com/131StudiosWeb" target="_blank" class=""><i
                                        class="fa fa-github fa-lg"></i> Github Projects</a>
                        </div>

                        <div class="w-1/3">
                            <h4>Navigation</h4>
                            <div class="flex">
                                <div class="flex flex-col mr-12">
                                    <router-link class="no-underline text-white" to="/">Home</router-link>
                                    <router-link class="no-underline text-white" to="/about">About Us</router-link>
                                    <router-link class="no-underline text-white" to="/">Services</router-link>
                                    <router-link class="no-underline text-white" to="/">Our Work</router-link>
                                    <router-link class="no-underline text-white" to="/">Contact Us</router-link>
                                </div>
                                <div>
                                    <div class="flex flex-col">
                                        <router-link class="text-white no-underline" to="/privacy">Privacy Policy
                                        </router-link>
                                        <router-link class="text-white no-underline" to="/terms">Terms of Service
                                        </router-link>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="w-1/3">
                            <h4>Contact Us</h4>
                            <div class="text-widget">
                                <span>P.O. Box 704 | Greencastle | PA | 17225</span> <br>
                                Phone: <span>(717) 977-3306 </span><br>
                                E-Mail:<span> contact@131studios.com </span><br>
                            </div>
                        </div>
                    </div>
                    <!-- Copyright -->
                    <div class="text-center">
                        <div class="">© Copyright 2017 <a href="#">131 Studios</a>. All Rights
                            Reserved.
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script type="text/javascript" src="/js/app.js"></script>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5af9dcf0227d3d7edc254e50/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    </body>
</html>