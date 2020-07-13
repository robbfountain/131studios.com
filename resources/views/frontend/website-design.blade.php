@extends('frontend.layouts.app')

@section('content')
    <x-banner>

        Website <span class="text-indigo-500">Design</span>

        <x-slot name="subtitle">Professionally designed websites at affordable prices.</x-slot>

    </x-banner>

    <x-service-offering
            service="Website Design"
            image="https://res.cloudinary.com/onethirtyone/image/upload/v1558561487/131%20Studios/website-design-131-studios-formats_sbhvbx.jpg">
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

        <div class="text-center text-4xl mt-6 text-gray-600 font-bold">
            Call Us Today! <span class="text-indigo-400">301.992.0962</span>
        </div>
    </x-service-offering>

    <section class="xs:py-3 lg:py-10 bg-white border-t">
        <div class="container mx-auto flex lg:flex-row sm:flex-col">
            <div class="flex p-3 lg:w-1/4 xs:w-full xs:mb-3 lg:mb-0 xs:border-b lg:border-b-0">
                <div class="mr-4">
                    <i class="fal fa-star mr-2 text-indigo-700 fa-3x"></i>
                </div>
                <div class="flex flex-col text-indigo-700">
                    <h3 class="text-lg tracking-wide font-bold text-indigo-800">Unique Design</h3>
                    <div class="mt-2 leading-normal">
                        Your website will have a unique design tailored to your business that will stand out from the
                        competition.
                    </div>
                </div>
            </div>

            <div class="flex p-3 lg:w-1/4 xs:w-full xs:mb-3 lg:mb-0 xs:border-b lg:border-b-0">
                <div class="mr-4">
                    <i class="fal fa-mobile-alt mr-2 text-indigo-700 fa-3x"></i>
                </div>
                <div class="flex flex-col text-indigo-700">
                    <h3 class="text-lg tracking-wide font-bold text-indigo-800">Fully Responsive</h3>
                    <div class="mt-2 leading-normal">
                        Your website will look great on any device...Phones, Tablets and computers
                    </div>
                </div>
            </div>

            <div class="flex p-3 lg:w-1/4 xs:w-full xs:mb-3 lg:mb-0 xs:border-b lg:border-b-0">
                <div class="mr-4">
                    <i class="fal fa-search mr-2 text-indigo-700 fa-3x"></i>
                </div>
                <div class="flex flex-col text-indigo-700">
                    <h3 class="text-lg tracking-wide font-bold text-indigo-800">Search Engine Optimized</h3>
                    <div class="mt-2 leading-normal">
                        Get your business recognized by ensuring your site is ranked in all major search engines.
                    </div>
                </div>
            </div>

            <div class="flex p-3 lg:w-1/4 xs:w-full xs:mb-3 lg:mb-0 xs:border-b lg:border-b-0">
                <div class="mr-4">
                    <i class="fal fa-envelope mr-2 text-indigo-700 fa-3x"></i>
                </div>
                <div class="flex flex-col text-indigo-700">
                    <h3 class="text-lg tracking-wide font-bold text-indigo-800">Email Contact Form</h3>
                    <div class="mt-2 leading-normal">
                        Your visitors can contact you directly from your website with your email contact form.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
