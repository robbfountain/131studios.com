@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
    <meta name="twitter:card" content="131 Studios"/>
    <meta name="twitter:site" content="@131Studios"/>
    <meta property="twitter:title" content="131 Studios">
    <meta property="twitter:description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
    <meta name="twitter:creator" content="@131Studios"/>
    <meta name=”twitter:image” content=”{{asset('images/131-logo-210x53.png')}}” />
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url" content="{{route('hosting.index')}}">
    <meta property="og:title" content="131 Studios">
    <meta property="og:image" content="{{asset('images/131-logo-210x53.png')}}">
    <meta property="og:description"
          content="{Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
@endsection

@section('content')
    <x-banner>
        Web Hosting
        <x-slot name="subtitle">Offering reliable web hosting for Greencastle, Chambersburg and Hagerstown</x-slot>
    </x-banner>

    <x-service-offering
            service="Hosting"
            image="https://res.cloudinary.com/onethirtyone/image/upload/v1558561495/131%20Studios/web-hosting_dgarnv.jpg">

        <p>
            In addition to website design and web app development we can host your website on one
            of our lightning fast private servers.
        </p>

        <p>We utilize industry leading virtual private servers from some of the top
            names
            in the industry
            such as <a class="text-blue-600 hover:text-blue-900 transition ease-in-out duration-150"
                       href="https://aws.amazon.com">AWS</a>, Digital Ocean and Linode.</p>

        <p>We take security very seriously. All of our web servers are patched
            regularly
            with the latest
            security updates. Access to servers is restricted to authorized users only using
            SSH key
            authentication. Password authentication is disabled. All access attempts are
            logged and monitored
            constantly.</p>

        <p>Your website hosted with 131 Studios will comes with loads of features
            including
            lightning
            fast response times, security and support</p>
    </x-service-offering>

    <section class="xs:py-3 lg:py-10 bg-white">
        <x-feature-container>
            <x-feature>
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                    </svg>
                </x-slot>
                <x-slot name="title">
                    MySQL Databases
                </x-slot>
                Unlimited MySQL databases with nightly backups.
            </x-feature>

            <x-feature>
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </x-slot>
                <x-slot name="title">
                    Unmatched Security
                </x-slot>
                Firewall with access control. SSH access and 24/7 monitoring.
            </x-feature>

            <x-feature>
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </x-slot>
                <x-slot name="title">
                    Top Notch Support
                </x-slot>
                One Hour of professional maintenance per month. 99.9% uptime guarantee
            </x-feature>

            <x-feature>
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </x-slot>
                <x-slot name="title">
                    Email Options
                </x-slot>
                30GB Storage, Cloud Drive Storage, Ultimate Spam Protection and More. Starting at $7/user
                    monthly.
            </x-feature>
        </x-feature-container>
    </section>
@endsection
