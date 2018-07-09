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
    <body>
        <div id="app">
        <header class="banner min-h-screen">
            <div>
                <div>
                    <a href="/"><img src="/images/logo-image-30x30.png" class=""> 131 Studios</a>
                </div>

                <!-- Main Navigation -->
                <nav id="navigation">
                    <ul class="menu alt2" id="responsive">
                        <router-link to="/">Home</router-link>
                        <router-link to="/about">About</router-link>
                        <router-link to="/services">Services</router-link>
                        <router-link to="/work">Our Work</router-link>
                        <router-link to="/contact">Contact</router-link>
                    </ul>
                </nav>
            </div>
        </header>

        <router-view></router-view>

        <footer>
            <div class="">
                <h4>About Us</h4>
                <p>131 Studios is a Web Development and IT Consulting company in Pennsylvania. We specialize in
                    writing top-notch web applications as well as offer superb IT consulting services.</p>
                <p> We have over 15 years of experience providing high level products and services.</p>

                <a href="http://facebook.com/131studiosweb" target="_blank" class=""><i
                            class="fa fa-facebook-official"></i> Like Us on Facebook</a>

                <a href="https://github.com/131StudiosWeb" target="_blank" class=""><i
                            class="fa fa-github fa-lg"></i> Github Projects</a>
            </div>

            <div class="">
                <h4>Navigation</h4>
                <ul class="">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Our Work</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </ul>

                <ul class="">
                    <li><a href="/privacy">Privacy Policy</a></li>
                    <li><a href="/terms">Terms of Service</a></li>
                </ul>
            </div>

            <div class="">
                <h4>Contact Us</h4>
                <div class="text-widget">
                    <span>P.O. Box 704 | Greencastle | PA | 17225</span> <br>
                    Phone: <span>(717) 977-3306 </span><br>
                    E-Mail:<span> contact@131studios.com </span><br>
                </div>
            </div>

            <!-- Copyright -->
            <div class="">
                <div class="">© Copyright 2017 <a href="#">131 Studios</a>. All Rights
                    Reserved.
                </div>
            </div>
        </footer>

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
        </div>
    </body>
</html>