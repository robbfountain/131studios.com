@extends('layouts.app')

@section('meta')
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
    <meta name="twitter:card" content="131 Studios"/>
    <meta name="twitter:site" content="@131Studios"/>
    <meta property="twitter:title" content="131 Studios">
    <meta property="twitter:description" content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
    <meta name="twitter:creator" content="@131Studios"/>
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url" content="{{route('email-hosting.index')}}">
    <meta property="og:title" content="131 Studios">
    <meta property="og:description" content="{Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
@endsection

@section('content')
    <x-banner>
        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-gray-500 font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                Email Hosting
            </h1>
        </div>
    </x-banner>

    <section class="xs:py-3 lg:py-10">
        <div class="container mx-auto">
            <div class="flex lg:flex-row xs:flex-col-reverse">
                <div class="text-lg text-gray-600 lg:pr-6 lg:w-1/2 xs:w-full">
                    <p class="text-lg text-gray-600 mb-8 leading-normal">
                        Let 131 Studios manage your email accounts and mailing lists. We can host your company's email
                        with an unrivaled set of included features. Our email hosting is backed by Google and comes with
                        a
                        wide range of features and starts at $7 per user monthly.
                    </p>
                </div>

                <div class="px-2 xs:w-full lg:w-1/2">
                    <img src="https://res.cloudinary.com/onethirtyone/image/upload/f_auto,q_68/v1589998246/131%20Studios/Depositphotos_39662321_l-2015_bqnzt8.jpg"
                         class="-mt-8" alt="Email Hosting 131 Studios">
                </div>

            </div>
        </div>
    </section>


    <section class="xs:py-3 lg:py-10 bg-gray-300 border-t">
        <div class="flex lg:flex-row xs:flex-col lg:flex-wrap">
            <div class="flex p-3 lg:w-1/4 xs:w-full xs:border-b lg:border-b-0">
                <div class="mr-4">
                    <fa :icon="['fal','at']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">Email @yourcompany.com</h3>
                    <div class="mt-2 leading-normal">
                        Send professional email from your business web address (you@yourcompany.com) and create
                        group mailing lists like sales@yourcompany.com.
                    </div>
                </div>
            </div>

            <div class="flex p-3 lg:w-1/4 xs:w-full xs:border-b lg:border-b-0">
                <div class="mr-4">
                    <fa :icon="['fal','server']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">30GB Storage</h3>
                    <div class="mt-2 leading-normal">
                        30GB of online storage per user. Share files, collaborate or store backups.
                    </div>
                </div>
            </div>

            <div class="flex p-3 lg:w-1/4 xs:w-full xs:border-b lg:border-b-0">
                <div class="mr-4">
                    <fa :icon="['fal','shield']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">Admin Controls</h3>
                    <div class="mt-2 leading-normal">
                        Add and remove users, set up groups, and add security options like 2-step verification
                        and single-sign-on (SSO), all from one centralized admin console.
                    </div>
                </div>
            </div>

            <div class="flex p-3 lg:w-1/4 xs:w-full xs:border-b lg:border-b-0">
                <div class="mr-4">
                    <fa :icon="['fal','mobile-alt']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">Mobile Device Management</h3>
                    <div class="mt-2 leading-normal">
                        Keep your company data secure with device management that allows you to easily locate
                        devices, require passwords, and erase data if needed.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
