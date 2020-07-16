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
        <x-feature-container>
                <x-feature icon="star">
                    <x-slot name="title">
                       Unique Design
                    </x-slot>
                    Your website will have a unique design tailored to your business that will stand out from the
                    competition.
                </x-feature>

                <x-feature icon="mobile-alt">
                    <x-slot name="title">
                       Fully Responsive
                    </x-slot>
                    Your website will look great on any device...Phones, Tablets and computers

                </x-feature>

                <x-feature icon="search">
                    <x-slot name="title">
                      Search Engine Optimized
                    </x-slot>
                    Get your business recognized by ensuring your site is ranked in all major search engines.
                </x-feature>

                <x-feature icon="envelope">
                    <x-slot name="title">
                        Email Contact Form
                    </x-slot>
                    Your visitors can contact you directly from your website with your email contact form.
                </x-feature>
            </x-feature-container>
    </section>
@endsection
