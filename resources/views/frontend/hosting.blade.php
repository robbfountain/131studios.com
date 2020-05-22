@extends('frontend.layouts.app')

@section('content')
    <x-banner>
        Web Hosting
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
            such as <a class="text-indigo-600 hover:text-indigo-900 transition ease-in-out duration-150" href="https://aws.amazon.com">Amazon AWS</a>, Digital Ocean and Linode.</p>

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

    <section class="xs:py-3 lg:py-10 bg-gray-100">
        <div class="flex lg:flex-row xs:flex-col container mx-auto">
            <div class="flex p-3 xs:w-full lg:w-1/4 lg:border-b-0 xs:border-b xs:mb-3 lg:mb-0">
                <div class="mr-4">
                    <fa :icon="['fal','database']" class="mr-2" size="3x"></fa>
                </div>
                <div class="text-blue-darker flex flex-col">
                    <h3 class="tracking-wide">MySQL Databases</h3>
                    <div class="mt-3">
                        Unlimited MySQL databases with nightly backups.
                    </div>
                </div>
            </div>

            <div class="flex p-3 xs:w-full lg:w-1/4 lg:border-b-0 xs:border-b xs:mb-3 lg:mb-0">
                <div class="mr-4">
                    <fa :icon="['fal','shield']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">Unmatched Security</h3>
                    <div class="mt-3 ">
                        Firewall with access control. SSH access and 24/7 monitoring.
                    </div>
                </div>
            </div>

            <div class="flex p-3 xs:w-full lg:w-1/4 lg:border-b-0 xs:border-b xs:mb-3 lg:mb-0">
                <div class="mr-4">
                    <fa :icon="['fal','wrench']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">Top Notch Support </h3>
                    <div class="mt-2">
                        1 Hour of professional maintenance per month. 99.9% uptime guarantee
                    </div>
                </div>
            </div>

            <div class="flex p-3 xs:w-full lg:w-1/4 lg:border-b-0 xs:border-b xs:mb-3 lg:mb-0">
                <div class="mr-4">
                    <fa :icon="['fal','envelope']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">Email Options</h3>
                    <div class="mt-2">
                        30GB Storage, Cloud Drive Storage, Ultimate Spam Protection and More. Starting at <a
                                href="/email-hosting" class="no-underline text-blue">$7/user
                            monthly</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
