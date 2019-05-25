@extends('frontend.layouts.app')

@section('content')
   @banner
        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-grey font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                Additional Services
            </h1>
        </div>
    @endbanner

    <section class="xs:py-3 lg:py-10">
        <div class="container mx-auto">
            <div class="mb-4 text-base flex items-center p-2 bg-grey-lighter rounded">
                <fa :icon="['fas','home']" class="mr-2"></fa>
                <a href="/" class="text-blue no-underline mr-2">Home</a>
                <fa :icon="['far','chevron-right']" size="xs" class="mr-2"></fa>
                Additional Services
            </div>

            <div class="text-lg text-grey-darker mb-8 leading-normal">
                We offer a number of additional services for your website and business. If you would like more information or if you need assistance with anything else that
                may not be listed please give us a call or <a href="/contact"
                                                              class="no-underline text-blue font-semibold">send us an email.</a> and we'll be happy to help you.
            </div>

            <div class="flex lg:flex-row xs:flex-col lg:flex-wrap">

                <!-- Service -->
                <div class="xs:w-full lg:w-1/3 xs:mb-3 lg:mb-0 p-2">
                    <div class="flex flex-col border-2 border-blue rounded mr-4 mb-4">
                        <div class="text-center py-4 bg-grey-lighter">
                            <fa :icon="['fal','search']" size="3x" class="text-blue"></fa>
                        </div>
                        <div class="p-2 text-center">
                            <h4 class="roboto text-3xl tracking-loose text-blue">SEO Checkup</h4>
                        </div>
                        <div class="py-3 text-grey-dark text-2xl italic text-center">
                            FREE ($99 Value)
                        </div>
                        <div class="py-2 px-4 leading-normal text-grey-darker text-lg">
                            See how your website performs in all the major search engines (Google, Bing, Yahoo!). Get recommendations on how to improve your score.
                        </div>
                        <div class="text-center py-6">
                            <a href="/contact"
                               class="border rounded border-blue text-blue px-4 py-2 hover:bg-blue hover:text-white no-underline">Contact Us</a>
                        </div>
                    </div>
                </div>


                <!-- Service -->
                <div class="xs:w-full lg:w-1/3 xs:mb-3 lg:mb-0 p-2">
                    <div class="flex flex-col border-2 border-blue rounded mr-4 mb-4">
                        <div class="text-center py-4 bg-grey-lighter">
                            <fa :icon="['fal','analytics']" size="3x" class="text-blue"></fa>
                        </div>
                        <div class="p-2 text-center">
                            <h4 class="roboto text-3xl tracking-loose text-blue">Google Analytics</h4>
                        </div>
                        <div class="py-3 text-grey-dark text-2xl italic text-center">
                            $50
                        </div>
                        <div class="py-2 px-4 leading-normal text-grey-darker text-lg">
                            Set up your Google Analytics account and integrate into your current website to track visitors and gain insights to your website traffic.
                        </div>
                        <div class="text-center py-6">
                            <a href="/contact"
                               class="border rounded border-blue text-blue px-4 py-2 hover:bg-blue hover:text-white no-underline">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="xs:w-full lg:w-1/3 xs:mb-3 lg:mb-0 p-2">
                    <div class="flex flex-col border-2 border-blue rounded mr-4 mb-4">
                        <div class="text-center py-4 bg-grey-lighter">
                            <fa :icon="['fal','globe']" size="3x" class="text-blue"></fa>
                        </div>
                        <div class="p-2 text-center">
                            <h4 class="roboto text-3xl tracking-loose text-blue">Domain Registration</h4>
                        </div>
                        <div class="py-3 text-grey-dark text-2xl italic text-center">
                            At Cost
                        </div>
                        <div class="py-2 px-4 leading-normal text-grey-darker text-lg">
                            We can register register your domain names for you.  From 1+ year intervals at cost. With no additional fees.
                        </div>
                        <div class="text-center py-6">
                            <a href="/contact"
                               class="border rounded border-blue text-blue px-4 py-2 hover:bg-blue hover:text-white no-underline">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="xs:w-full lg:w-1/3 xs:mb-3 lg:mb-0 p-2">
                    <div class="flex flex-col border-2 border-blue rounded mr-4 mb-4">
                        <div class="text-center py-4 bg-grey-lighter">
                            <fa :icon="['fal','envelope']" size="3x" class="text-blue"></fa>
                        </div>
                        <div class="p-2 text-center">
                            <h4 class="roboto text-3xl tracking-loose text-blue">Email Hosting</h4>
                        </div>
                        <div class="py-3 text-grey-dark text-2xl italic text-center">
                            $7/user Monthly
                        </div>
                        <div class="py-2 px-4 leading-normal text-grey-darker text-lg">
                            Send professional email from your business web address (you@yourcompany.com) with 30 GB storage per account.
                        </div>
                        <div class="text-center py-6">
                            <a href="/email-hosting"
                               class="border rounded border-blue text-blue px-4 py-2 hover:bg-blue hover:text-white no-underline">Explore Features</a>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="xs:w-full lg:w-1/3 xs:mb-3 lg:mb-0 p-2">
                    <div class="flex flex-col border-2 border-blue rounded mr-4 mb-4">
                        <div class="text-center py-4 bg-grey-lighter">
                            <fa :icon="['fal','chart-network']" size="3x" class="text-blue"></fa>
                        </div>
                        <div class="p-2 text-center">
                            <h4 class="roboto text-3xl tracking-loose text-blue">DNS Management</h4>
                        </div>
                        <div class="py-3 text-grey-dark text-2xl italic text-center">
                            $5/Zone Monthly
                        </div>
                        <div class="py-2 px-4 leading-normal text-grey-darker text-lg">
                           Host your DNS on our highly available and scalable cloud Domain Name System (DNS) web service.  Unlimited DNS records per zone.
                        </div>
                        <div class="text-center py-6">
                            <a href="/contact"
                               class="border rounded border-blue text-blue px-4 py-2 hover:bg-blue hover:text-white no-underline">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="xs:w-full lg:w-1/3 xs:mb-3 lg:mb-0 p-2">
                    <div class="flex flex-col border-2 border-blue rounded mr-4 mb-4">
                        <div class="text-center py-4 bg-grey-lighter">
                            <fa :icon="['fal','server']" size="3x" class="text-blue"></fa>
                        </div>
                        <div class="p-2 text-center">
                            <h4 class="roboto text-3xl tracking-loose text-blue">Website Hosting</h4>
                        </div>
                        <div class="py-3 text-grey-dark text-2xl italic text-center">
                            $50 Monthly
                        </div>
                        <div class="py-2 px-4 leading-normal text-grey-darker text-lg">
                           We can host your website on industry leading Virtual Private Servers.  Includes 1 hours of monthly maintenance.
                        </div>
                        <div class="text-center py-6">
                            <a href="/hosting"
                               class="border rounded border-blue text-blue px-4 py-2 hover:bg-blue hover:text-white no-underline">Explore Features</a>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </section>
@endsection