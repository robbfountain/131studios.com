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
    <link rel="stylesheet" href="{{mix('css/app.css')}}">

    <!-- Analytics -->
    @include('frontend.partials.google-analytics')

</head>
<body>
<div id="app">
        <div class="flex flex-col min-h-screen">
            {{--<pinned>--}}
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
                        <nav class="px-2 flex xs:flex-col xs:min-w-full xs:mt-6 lg:flex-row lg:min-w-0">

                            <router-link to="/"
                                         class="no-underline uppercase text-white hover:text-grey-dark xs:mb-2 lg:mr-4 ">
                                Home
                            </router-link>


                            <router-link to="/about"
                                         class="no-underline uppercase text-white hover:text-grey-dark xs:mb-2 lg:mr-4">
                                About
                            </router-link>


                            <router-link to="/services"
                                         class="no-underline uppercase text-white hover:text-grey-dark xs:mb-2 lg:mr-4">
                                Services
                            </router-link>


                            <router-link to="/work"
                                         class="no-underline uppercase text-white hover:text-grey-dark xs:mb-2 lg:mr-4">
                                Our Work
                            </router-link>


                            <router-link to="/contact"
                                         class="no-underline uppercase text-white hover:text-grey-dark xs:mb-2 lg:mr-4">
                                Contact
                            </router-link>
                        </nav>
                    </div>
                </div>
            </header>
            {{--</pinned>--}}

            <div class="flex-1">
                <transition name="router-anim" enter-active-class="animated slideInLeft" leave-active-class="animated slideOutRight">
                    <router-view></router-view>
                </transition>

            </div>

            <footer class="bg-blue-darker pt-8 pb-4 flex flex-col text-grey-light leading-normal border-t px-2">
                <div class="container mx-auto flex justify-between xs:flex-col lg:flex-row">
                    <div class="mr-4 pr-4 lg:w-1/3 ">
                        <h4 class="text-grey-dark text-lg xs:mt-4 lg:mt-0">About Us</h4>
                        <p>131 Studios is a Web Development and IT Consulting company in Pennsylvania. We specialize
                            in
                            writing top-notch web applications as well as offer superb IT consulting services.</p>
                        <p> We have over 15 years of experience providing high level products and services.</p>

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
                                <router-link class="no-underline text-white hover:text-grey-dark" to="/">Home
                                </router-link>
                                <router-link class="no-underline text-white hover:text-grey-dark" to="/about">About
                                    Us
                                </router-link>
                                <router-link class="no-underline text-white hover:text-grey-dark" to="/">Services
                                </router-link>
                                <router-link class="no-underline text-white hover:text-grey-dark" to="/">Our Work
                                </router-link>
                                <router-link class="no-underline text-white hover:text-grey-dark" to="/">Contact
                                    Us
                                </router-link>
                            </div>
                            <div>
                                <div class="flex flex-col">
                                    <router-link class="text-white hover:text-grey-dark no-underline" to="/privacy">
                                        Privacy Policy
                                    </router-link>
                                    <router-link class="text-white hover:text-grey-dark no-underline" to="/terms">
                                        Terms of Service
                                    </router-link>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="mr-4 lg:w-1/3">
                        <h4 class="text-grey-dark text-lg xs:mt-4 lg:mt-0">Contact Us</h4>
                        <div class="text-widget">
                            <div class="mb-3">P.O. Box 704 &middot; Greencastle &middot; PA &middot; 17225</div>
                            <div class="mb-3"> Phone: (717) 977-3306</div>
                            <div class="mb-3">E-Mail: contact@131studios.com</div>
                        </div>
                    </div>
                </div>
                <!-- Copyright -->
                <div class="text-center mt-6">
                    © Copyright 2017 131 Studios. All Rights Reserved.
                </div>
            </footer>
        </div>
</div>

<script type="text/javascript" src="{{mix('js/app.js')}}"></script>
<script type="text/javascript" src="{{mix('js/custom.js')}}"></script>

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