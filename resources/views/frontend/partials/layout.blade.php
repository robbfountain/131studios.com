<!DOCTYPE html>
<!--[if IE 9 ]>
<html class="ie ie9" lang="en">
<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <!-- Basic Page Needs
    ================================================== -->

    <title>{{config('app.name')}}</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/all.css" id="colors">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Analytics -->
    @include('frontend.partials.google-analytics')

</head>

<body>

<!-- Page Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
</div>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
@yield('header')


<!-- Content
================================================== -->

@yield('content')

<!-- Footer
================================================== -->
    <div id="footer">
        <!-- Main -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <h4>About Us</h4>
                    <p>131 Studios is a Web Development and IT Consulting company in Pennsylvania. We specialize in
                        writing top-notch web applications as well as offer superb IT consulting services.</p>
                    <p> We have over 15 years of experience providing high level products and services.</p>

                    <a href="http://facebook.com/131studiosweb" target="_blank" class="button social-btn"><i
                                class="fa fa-facebook-official"></i> Like Us on Facebook</a>

                    <a href="https://github.com/131StudiosWeb" target="_blank" class="button github-btn"><i
                                class="fa fa-github fa-lg"></i> Github Projects</a>
                </div>

                <div class="col-md-4  col-sm-6">
                    <h4>Navigation</h4>
                    <ul class="footer-links">
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                            <li><a href="{{route('projects')}}">Our Work</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </ul>

                    <ul class="footer-links">
                        {{-- <li><a href="/news">In the News</a></li> --}}
                        <li><a href="/privacy">Privacy Policy</a></li>
                        <li><a href="/terms">Terms of Service</a></li>

                    </ul>
                </div>

                <div class="col-md-3  col-sm-12">
                    <h4>Contact Us</h4>
                    <div class="text-widget">
                        <span>P.O. Box 704 | Greencastle | PA | 17225</span> <br>
                        Phone: <span>(717) 977-3306 </span><br>
                        E-Mail:<span> contact@131studios.com </span><br>
                    </div>
                </div>

            </div>

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-12">
                    <div class="copyrights">© Copyright 2017 <a href="#">{{env('COMPANY_NAME')}}</a>. All Rights
                        Reserved.
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->
<!-- Scripts
================================================== -->

<script type="text/javascript" src="/js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/vendor.js"></script>
{{--<script type="text/javascript" src="/js/app.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>--}}
{{--<script type="text/javascript" src="/js/owl.carousel.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/waypoints.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.isotope.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.sticky-kit.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.twentytwenty.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.event.move.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.photogrid.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.tooltips.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.stacktable.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.jpanelmenu.js"></script>--}}
{{--<script type="text/javascript" src="/js/headroom.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/modernizr.custom.js"></script>--}}
{{--<script type="text/javascript" src="/js/puregrid.js"></script>--}}
{{--<script type="text/javascript" src="/js/flexibility.js"></script>--}}
{{--<script type="text/javascript" src="/js/sweetalert-dev.js"></script>--}}
<script type="text/javascript" src="/js/custom.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5af9dcf0227d3d7edc254e50/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>
</html>