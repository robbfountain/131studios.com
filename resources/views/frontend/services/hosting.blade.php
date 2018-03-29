@extends('frontend.partials.layout')

@section('header')
    @include('frontend.partials.header-sub')
@stop

@section('content')

    <div class="container" id="app">
        <div class="row margin-top-20">
            <!-- Text Block -->
            <div class="col-md-12 ">
                <h3 class="headline with-border margin-bottom-45 margin-top-20">Website Hosting</h3>
                <p>We offer an wide array of excellent hosting packages for our clients using industry leading virtual
                    private servers and other services.</p>

                <h3 class="headline with-border">
                    Servers
                </h3>
                <p>Our client's websites are hosted on state of the art virtual private servers with the latest Ubuntu
                    operating systems and web server software. Each server comes standard with Ubuntu 16.04 LTS and our
                    tailored server configurations, complete with Nginx, PHP 7, MySQL, Postgres, Redis, Memcached, and
                    automated security updates.</p>

                <h3 class="headline with-border margin-bottom-10">
                    Security
                </h3>
                <p>We take security very seriously. All of our web servers are patched regularly with the latest
                    security updates. Access to servers is restricted to authorized users only using SSH key
                    authentication. Password authentication is disabled. All access attempts are logged and monitored
                    constantly.</p>
            </div>
        </div> <!-- row -->
        <!-- Row / Start -->
        <div class="row no-gutters">

            <div class="col-md-12">
                <h3 class="headline with-border margin-bottom-45 margin-top-20">Pricing</h3>
            </div>


            <!-- Plan #1 -->
            <div class="col-md-4 col-sm-6">
                <div class="plan color-1">
                    <div class="plan-price">
                        <h3>Shared</h3>
                        <span class="value">$10</span>
                        <span class="period">per month & up</span>
                    </div>
                    <div class="plan-features">
                        <ul>
                            <li>Shared VPS Server</li>
                            <li>Mysql Database</li>
                            <li>Nightly Backups</li>
                            <li>SSL Certificate</li>
                            <li>DNS Hosting</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- Plan #3 -->
                <div class="plan color-2">
                    <div class="plan-price">
                        <h3>Dedicated</h3>
                        <span class="value">$20</span>
                        <span class="period">per month & up</span>
                    </div>
                    <div class="plan-features">
                        <ul>
                            <li>Dedicated VPS Server</li>
                            <li>MySQL Database</li>
                            <li>Nightly Backups</li>
                            <li>SSL Certificate</li>
                            <li>DNS Hosting</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- Plan #3 -->
                <div class="plan color-1">
                    <div class="plan-price">
                        <h3>Dedicated Plus</h3>
                        <span class="value">$30</span>
                        <span class="period">per month & up</span>
                    </div>
                    <div class="plan-features">
                        <ul>
                            <li>Dedicated VPS Server</li>
                            <li>Dedicated VPS MySQL Server</li>
                            <li>Nightly Backups</li>
                            <li>SSL Certificate</li>
                            <li>DNS Hosting</li>
                            <li>Advanced Logging</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- Row / End -->
    </div>
@endsection