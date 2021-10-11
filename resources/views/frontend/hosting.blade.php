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
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url" content="{{route('hosting.index')}}">
    <meta property="og:title" content="131 Studios">
    <meta property="og:description"
          content="{Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
@endsection

@section('content')
    <x-banner>
        Web
        <x-slot name="titleExpanded">Hosting</x-slot>
        <x-slot name="subtitle">Offering reliable web hosting for Greencastle, Chambersburg and Hagerstown</x-slot>
    </x-banner>

    <x-service-offering
            service="Hosting"
            image="https://res.cloudinary.com/onethirtyone/image/upload/v1558561495/131%20Studios/web-hosting_dgarnv.jpg">

        <p class="py-4">
            In addition to website design and web app development we can host your website on one
            of our lightning fast private servers.
        </p>

        <p class="py-4">We utilize industry leading virtual private servers from some of the top
            names
            in the industry
            such as <a class="text-blue-600 hover:text-blue-900 transition ease-in-out duration-150"
                       href="https://aws.amazon.com">AWS</a>, Digital Ocean and Linode.</p>

        <p class="py-4">We take security very seriously. All of our web servers are patched
            regularly
            with the latest
            security updates. Access to servers is restricted to authorized users only using
            SSH key
            authentication. Password authentication is disabled. All access attempts are
            logged and monitored
            constantly.</p>

        <p class="py-4">Your website hosted with 131 Studios will comes with loads of features
            including
            lightning
            fast response times, security and support</p>
    </x-service-offering>

    <section class="xs:py-3 lg:py-10 bg-white">
        <x-feature-container>
            <x-feature icon="database">
                <x-slot name="title">
                    MySQL Databases
                </x-slot>
                Unlimited MySQL databases with nightly backups.
            </x-feature>

            <x-feature icon="shield">
                <x-slot name="title">
                    Unmatched Security
                </x-slot>
                Firewall with access control. SSH access and 24/7 monitoring.
            </x-feature>

            <x-feature icon="wrench">
                <x-slot name="title">
                    Top Notch Support
                </x-slot>
                One Hour of professional maintenance per month. 99.9% uptime guarantee
            </x-feature>

            <x-feature icon="envelope">
                <x-slot name="title">
                    Email Options
                </x-slot>
                30GB Storage, Cloud Drive Storage, Ultimate Spam Protection and More. Starting at <a
                        href="/email-hosting" class="no-underline text-blue">$7/user
                    monthly</a>
            </x-feature>
        </x-feature-container>
    </section>
@endsection
