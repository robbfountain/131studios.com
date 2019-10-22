@extends('frontend.layouts.app')

@section('content')
   @banner
        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-gray-500 font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                Website Design
            </h1>
        </div>
   @endbanner

    <section class="xs:py-3 lg:py-10">
        <div class="container mx-auto">
            <div class="mb-8 text-base flex items-center p-2 bg-gray-@300 rounded">
                <fa :icon="['fas','home']" class="mr-2"></fa>
                <a href="/" class="text-blue no-underline mr-2">Home</a>
                <fa :icon="['far','chevron-right']" size="xs" class="mr-2"></fa>
                Website Design
            </div>

            <div class="flex lg:flex-row xs:flex-col-reverse">
                <div class="text-lg text-gray-600 lg:pr-6 lg:w-1/2 xs:w-full">
                    <p class="mb-6">Let's face it, in today's digital world your business needs a website that stands
                                    our from your
                                    competitors.
                                    131 Studios designs custom websites for our clients that meet the needs of their
                                    business. </p>

                    <p class="mb-6">We will work with your every step of the way to determine your needs and wants.
                                    We'll make suggestions and recommendations to make sure you're getting what you want
                                    and we keep
                                    you informed every step of the process</p>
                    <p>
                        If you currently have a website and just want to make some changes, we can help you out. Just
                        give us
                        a call and let us know how we can help you.
                    </p>

                    <div class="text-center text-4xl mt-6 text-gray-600 font-semibold">
                        Call Us Today! <span class="text-blue-400">301.992.0962</span>
                    </div>
                </div>

                <div class="px-2 xs:w-full lg:w-1/2">
                    <img src="https://res.cloudinary.com/onethirtyone/image/upload/v1558561487/131%20Studios/website-design-131-studios-formats_sbhvbx.jpg"
                         class="-mt-8" alt="Website Design 131 Studios">
                </div>
            </div>
        </div>
    </section>

    <section class="xs:py-3 lg:py-10 bg-gray-300 border-t">
        <div class="container mx-auto flex lg:flex-row xs:flex-col">
            <div class="flex p-3 lg:w-1/4 xs:w-full xs:mb-3 lg:mb-0 xs:border-b lg:border-b-0">
                <div class="mr-4">
                    <fa :icon="['fal','star']" class="mr-2 text-blue-700" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-700">
                    <h3 class="tracking-wide">Unique Design</h3>
                    <div class="mt-2 leading-normal">
                        Your website will have a unique design tailored to your business that will stand out from the
                        competition.
                    </div>
                </div>
            </div>


            <div class="flex p-3 lg:w-1/4 xs:w-full xs:mb-3 lg:mb-0 xs:border-b lg:border-b-0">
                <div class="mr-4">
                    <fa :icon="['fal','mobile-alt']" class="mr-2 text-blue-700" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-700">
                    <h3 class="tracking-wide">Fully Responsive</h3>
                    <div class="mt-2 leading-normal">
                        Your website will look great on any device...Phones, Tablets and computers
                    </div>
                </div>
            </div>


            <div class="flex p-3 lg:w-1/4 xs:w-full xs:mb-3 lg:mb-0 xs:border-b lg:border-b-0">
                <div class="mr-4">
                    <fa :icon="['fal','search']" class="mr-2 text-blue-700" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-700">
                    <h3 class="tracking-wide">Search Engine Optimized</h3>
                    <div class="mt-2 leading-normal">
                        Get your business recognized by ensuring your site is ranked in all major search engines.
                    </div>
                </div>
            </div>


            <div class="flex p-3 lg:w-1/4 xs:w-full xs:mb-3 lg:mb-0 xs:border-b lg:border-b-0">
                <div class="mr-4">
                    <fa :icon="['fal','envelope']" class="mr-2 text-blue-700" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-700">
                    <h3 class="tracking-wide">Email Contact Form</h3>
                    <div class="mt-2 leading-normal">
                        Your visitors can contact you directly from your website with your email contact form.
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection