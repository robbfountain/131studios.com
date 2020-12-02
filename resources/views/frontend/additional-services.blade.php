@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
@endsection

@section('content')
    <x-banner>
        Additional <span class="text-blue-500">Services</span>
        <x-slot name="subtitle">We offer a wide range of additional services. If there is something you need but don't
            see it listed, just <a class="text-blue-500 hover:text-blue-600 transition ease-in-out duration-150"
                                   href="{{route('contact.index')}}">ask us.</a></x-slot>
    </x-banner>

    <section class="py-12 bg-white">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
           <x-feature-container>
                <x-feature icon="search">

                    <x-slot name="title">SEO Checkup</x-slot>
                    <x-slot name="price">FREE ($99 Value)</x-slot>

                    See how your website performs in all the major search engines (Google, Bing, Yahoo!). Get
                    recommendations on how to improve your score.

                </x-feature>

                <x-feature icon="analytics">

                    <x-slot name="title">Google Analytics</x-slot>
                    <x-slot name="price">$50</x-slot>

                    Set up your Google Analytics account and integrate into your current website to track
                    visitors and gain insights to your website traffic.

                </x-feature>

                <x-feature icon="globe">

                    <x-slot name="title">Domain Registration</x-slot>
                    <x-slot name="price">$15</x-slot>

                    We can register your domain names for you. From 1+ year intervals at cost. With no additional fees.

                </x-feature>

                <x-feature icon="envelope">

                    <x-slot name="title">Email Hosting</x-slot>
                    <x-slot name="price">$7/user per month</x-slot>

                    Send professional email from your business web address (you@yourcompany.com) with 30 GB storage per account.

                </x-feature>

                <x-feature icon="chart-network">

                    <x-slot name="title">DNS Management </x-slot>
                    <x-slot name="price">$5/domain per month</x-slot>

                    Host your DNS on our highly available and scalable cloud Domain Name System (DNS) web service. Unlimited DNS records per zone.

                </x-feature>

                <x-feature icon="server">

                    <x-slot name="title">Website Hosting</x-slot>
                    <x-slot name="price">$50/month</x-slot>

                    We can host your website on industry leading Virtual Private Servers. Includes 1 hours of monthly maintenance.

                </x-feature>
           </x-feature-container>
        </div>
    </section>

    <div class="bg-gray-50">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                Ready to dive in?
                <br>
                <span class="text-blue-600">Contact us to get started.</span>
            </h2>
            <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{route('contact.index')}}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                        Get started
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
