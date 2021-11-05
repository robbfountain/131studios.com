@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
    <meta name="twitter:card" content="131 Studios - Contact Us"/>
    <meta name="twitter:site" content="@131Studios"/>
    <meta property="twitter:title" content="131 Studios">
    <meta property="twitter:description" content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
    <meta name="twitter:creator" content="@131Studios"/>
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url" content="{{route('contact.index')}}">
    <meta property="og:title" content="131 Studios">
    <meta property="og:description" content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
@endsection

@section('content')
    <x-banner>
        Contact Us
        <x-slot name="subtitle">We'd love to hear from you</x-slot>
    </x-banner>
    <div class="relative bg-white">
        <div class="absolute inset-0">
            <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
        </div>
        <div>
            <div class="relative  mx-auto lg:grid lg:grid-cols-5">
                <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                    <div class="max-w-lg mx-auto">
                        <h2 class="text-2xl leading-8 font-bold tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
                            Get in touch
                        </h2>
                        <p class="mt-3 text-lg leading-6 text-gray-500">
                            Drop us a line and we will get back to you promptly. We can also be reached via any of the methods below.
                        </p>
                        <dl class="mt-8 text-base leading-6 text-gray-500">
                            <div>
                                <dt class="sr-only">Postal address</dt>
                                <dd>
                                    <p>545 Scarlet Circle</p>
                                    <p>Greencastle, PA 17225</p>
                                </dd>
                            </div>
                            <div class="mt-6">
                                <dt class="sr-only">Phone number</dt>
                                <dd class="flex">
                                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke="currentColor"
                                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         viewBox="0 0 24 24">
                                        <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <span class="ml-3">
                                        <a href="tel:3019920962">
                                            (301) 992-0962
                                        </a>
                                    </span>
                                </dd>
                            </div>
                            <div class="mt-3">
                                <dt class="sr-only">Email</dt>
                                <dd class="flex">
                                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" stroke="currentColor" fill="none"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="ml-3">
                                        <a href="mailto:robb@131studios.com">
                                            robb@131studios.com
                                        </a>
                                    </span>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                    <div class="max-w-lg mx-auto lg:max-w-none">
                        <livewire:contact-us />
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
