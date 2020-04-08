@extends('frontend.layouts.app')

@section('content')
   <x-banner>
        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-gray-500 font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                Additional Services
            </h1>
        </div>
   </x-banner>

    <section class="xs:py-3 lg:py-10">
        <div class="container mx-auto">
            <div class="text-lg text-gray-600 mb-8 leading-normal">
                We offer a number of additional services for your website and business. If you would like more information or if you need assistance with anything else that
                may not be listed please give us a call or <a href="/contact"
                                                              class="no-underline text-blue-600 font-semibold">send us an email.</a> and we'll be happy to help you.
            </div>

            <div class="flex lg:flex-row xs:flex-col lg:flex-wrap">

                <!-- Service -->
                <div class="xs:w-full lg:w-1/3 xs:mb-3 lg:mb-0 p-2">
                    <div class="flex flex-col border-2 border-blue-600 rounded mr-4 mb-4">
                        <div class="text-center py-4 bg-gray-@300">
                            <fa :icon="['fal','search']" size="3x" class="text-blue-600"></fa>
                        </div>
                        <div class="p-2 text-center">
                            <h4 class=" text-3xl tracking-loose text-blue-600">SEO Checkup</h4>
                        </div>
                        <div class="py-3 text-gray-600 text-2xl italic text-center">
                            FREE ($99 Value)
                        </div>
                        <div class="py-2 px-4 leading-normal text-gray-600 text-lg">
                            See how your website performs in all the major search engines (Google, Bing, Yahoo!). Get recommendations on how to improve your score.
                        </div>
                        <div class="text-center py-6">
                            <a href="/contact"
                               class="border rounded border-blue-600 text-blue-600 px-4 py-2 hover:bg-blue hover:text-white no-underline">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="xs:w-full lg:w-1/3 xs:mb-3 lg:mb-0 p-2">
                    <div class="flex flex-col border-2 border-blue-600 rounded mr-4 mb-4">
                        <div class="text-center py-4 bg-gray-@300">
                            <fa :icon="['fal','analytics']" size="3x" class="text-blue-600"></fa>
                        </div>
                        <div class="p-2 text-center">
                            <h4 class=" text-3xl tracking-loose text-blue-600">Google Analytics</h4>
                        </div>
                        <div class="py-3 text-gray-600 text-2xl italic text-center">
                            $50
                        </div>
                        <div class="py-2 px-4 leading-normal text-gray-600 text-lg">
                            Set up your Google Analytics account and integrate into your current website to track visitors and gain insights to your website traffic.
                        </div>
                        <div class="text-center py-6">
                            <a href="/contact"
                               class="border rounded border-blue-600 text-blue-600 px-4 py-2 hover:bg-blue hover:text-white no-underline">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="xs:w-full lg:w-1/3 xs:mb-3 lg:mb-0 p-2">
                    <div class="flex flex-col border-2 border-blue-600 rounded mr-4 mb-4">
                        <div class="text-center py-4 bg-gray-@300">
                            <fa :icon="['fal','globe']" size="3x" class="text-blue-600"></fa>
                        </div>
                        <div class="p-2 text-center">
                            <h4 class=" text-3xl tracking-loose text-blue-600">Domain Registration</h4>
                        </div>
                        <div class="py-3 text-gray-600 text-2xl italic text-center">
                            At Cost
                        </div>
                        <div class="py-2 px-4 leading-normal text-gray-600 text-lg">
                            We can register your domain names for you.  From 1+ year intervals at cost. With no additional fees.
                        </div>
                        <div class="text-center py-6">
                            <a href="/contact"
                               class="border rounded border-blue-600 text-blue-600 px-4 py-2 hover:bg-blue hover:text-white no-underline">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="xs:w-full lg:w-1/3 xs:mb-3 lg:mb-0 p-2">
                    <div class="flex flex-col border-2 border-blue-600 rounded mr-4 mb-4">
                        <div class="text-center py-4 bg-gray-@300">
                            <fa :icon="['fal','envelope']" size="3x" class="text-blue-600"></fa>
                        </div>
                        <div class="p-2 text-center">
                            <h4 class=" text-3xl tracking-loose text-blue-600">Email Hosting</h4>
                        </div>
                        <div class="py-3 text-gray-600 text-2xl italic text-center">
                            $7/user Monthly
                        </div>
                        <div class="py-2 px-4 leading-normal text-gray-600 text-lg">
                            Send professional email from your business web address (you@yourcompany.com) with 30 GB storage per account.
                        </div>
                        <div class="text-center py-6">
                            <a href="/email-hosting"
                               class="border rounded border-blue-600 text-blue-600 px-4 py-2 hover:bg-blue hover:text-white no-underline">Explore Features</a>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="xs:w-full lg:w-1/3 xs:mb-3 lg:mb-0 p-2">
                    <div class="flex flex-col border-2 border-blue-600 rounded mr-4 mb-4">
                        <div class="text-center py-4 bg-gray-@300">
                            <fa :icon="['fal','chart-network']" size="3x" class="text-blue-600"></fa>
                        </div>
                        <div class="p-2 text-center">
                            <h4 class=" text-3xl tracking-loose text-blue-600">DNS Management</h4>
                        </div>
                        <div class="py-3 text-gray-600 text-2xl italic text-center">
                            $5/Zone Monthly
                        </div>
                        <div class="py-2 px-4 leading-normal text-gray-600 text-lg">
                           Host your DNS on our highly available and scalable cloud Domain Name System (DNS) web service.  Unlimited DNS records per zone.
                        </div>
                        <div class="text-center py-6">
                            <a href="/contact"
                               class="border rounded border-blue-600 text-blue-600 px-4 py-2 hover:bg-blue hover:text-white no-underline">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="xs:w-full lg:w-1/3 xs:mb-3 lg:mb-0 p-2">
                    <div class="flex flex-col border-2 border-blue-600 rounded mr-4 mb-4">
                        <div class="text-center py-4 bg-gray-@300">
                            <fa :icon="['fal','server']" size="3x" class="text-blue-600"></fa>
                        </div>
                        <div class="p-2 text-center">
                            <h4 class=" text-3xl tracking-loose text-blue-600">Website Hosting</h4>
                        </div>
                        <div class="py-3 text-gray-600 text-2xl italic text-center">
                            $50 Monthly
                        </div>
                        <div class="py-2 px-4 leading-normal text-gray-600 text-lg">
                           We can host your website on industry leading Virtual Private Servers.  Includes 1 hours of monthly maintenance.
                        </div>
                        <div class="text-center py-6">
                            <a href="/hosting"
                               class="border rounded border-blue-600 text-blue-600 px-4 py-2 hover:bg-blue hover:text-white no-underline">Explore Features</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
