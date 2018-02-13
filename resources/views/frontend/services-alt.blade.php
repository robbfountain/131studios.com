@extends('frontend.partials.layout')

@section('header')
    @include('frontend.partials.header-sub')
@stop

@section('content')
    <!-- Contact
================================================== -->
    <div class="container" id="app">
        <div class="row">
            <!-- Text Block -->
            <div class="col-md-12 text-center">
                <h3 class="service-intro margin-bottom-25"><strong>We are your solution for your web and IT
                        needs.</strong></h3>
                <p>We offer a wide range of services for your business. We have over 15 years of web application
                    development and can write custom applications to increase your productivity and maximize profits.
                    From user-friendly content managements systems, social media management, blogging systems and more,
                    we can create a custom web application for your business. </p>

                <p>Hosting your website is a breeze. We handle everything. We use powerful virtual private servers which
                    allow us to maximize resources while reducing costs. Hosting plans start at $15.00 / month.</p>

                <p>Additionally we offer local IT consulting services for small and home-based businesses. We can
                    source, manage and administer your servers, workstations and network equipment so you only have to
                    focus on your business. </p>
            </div>
        </div> <!-- row -->
    </div>
    <!-- Image Edge -->
    <div class="image-edge margin-top-70">

        <div class="image-edge-content">
            <h2>Web Development</h2>
            <br>
            <p>We have over 15 years of web development experience and can custom design almost any functional aspect of
                your website. We can add e-commerce abilities to your page, custom blogs, content management systems,
                event scheduling and more. You name it, we can make it happen. </p>

        </div>

        <div class="edge-bg" data-background-image="images/services/development.jpeg"></div>

    </div>
    <!-- Image Edge / End -->

    <!-- Image Edge -->
    <div class="image-edge left dark margin-top-0">

        <div class="image-edge-content">
            <h2>IT Consulting Services</h2>
            <br>
            <p>We offer small office and home office IT Consulting services. From server and workstation procurement,
                installation and maintenance to networking and IT security services, we can help your business run
                smoothly while you focus on what matters most to you...your business! We offer remote assistance, patching, virus
                removal and prevention as well as network security and intrusion prevention. Whatever your IT needs, we
                can do it for you.</p>

        </div>

        <div class="edge-bg" data-background-image="images/services/consulting.jpg"></div>

    </div>
    <!-- Image Edge / End -->

    <!-- Image Edge -->
    <div class="image-edge margin-top-0">

        <div class="image-edge-content">
            <h2>Hosting</h2>
            <br>
            <p>We host all of our client's websites on top of the line virtual private servers. You can rest assured
                that your website will be accessible and available 24/7/365. We also offer email management,
                transactional email service and maintenance for an affordable price. </p>

            <p>
                <a href="/services/hosting">More Info <i class="fa fa-angle-double-right"></i></a>
            </p>

        </div>

        <div class="edge-bg" data-background-image="images/services/host.jpeg"></div>

    </div>
    <!-- Image Edge / End -->

    <!-- Content -->
    <div class="info-banner-fw boxed light">
        Contact us for a customized quote.
        <a class="button border medium" href="/longform">Contact Us</a>
    </div>

@stop