@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
    <meta name="twitter:card" content="131 Studios"/>
    <meta name="twitter:site" content="@131Studios"/>
    <meta property="twitter:title" content="131 Studios">
    <meta property="twitter:description" content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
    <meta name="twitter:creator" content="@131Studios"/>
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:url" content="{{route('website-design.index')}}">
    <meta property="og:title" content="131 Studios">
    <meta property="og:description" content="{Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today.">
@endsection

@section('content')
    <x-banner>

        Website Design

        <x-slot name="subtitle">Professionally designed websites at affordable prices.</x-slot>

    </x-banner>

    <x-service-offering
            service="Website Design"
            image="https://res.cloudinary.com/onethirtyone/image/upload/v1558561487/131%20Studios/website-design-131-studios-formats_sbhvbx.jpg">
        <p>Let's face it, in today's digital world your business needs a website that stands
            our from your
            competitors.
            131 Studios designs custom websites for our clients that meet the needs of their
            business. </p>

        <p>We will work with your every step of the way to determine your needs and wants.
            We'll make suggestions and recommendations to make sure you're getting what you want
            and we keep
            you informed every step of the process</p>
        <p>
            If you currently have a website and just want to make some changes, we can help you out. Just
            give us
            a call and let us know how we can help you.
        </p>

        <div class="text-center text-4xl mt-8 text-gray-600">
            Call Us Today! <a href="tel:3019920962" class="text-blue-700 hover:text-sky-700">301.992.0962</a>
        </div>
    </x-service-offering>

    <section class="xs:py-3 lg:py-10 bg-white border-t">
        <x-feature-container>
                <x-feature>
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </x-slot>
                    <x-slot name="title">
                       Unique Design
                    </x-slot>
                    Your website will have a unique design tailored to your business that will stand out from the
                    competition.
                </x-feature>

                <x-feature>
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </x-slot>
                    <x-slot name="title">
                       Fully Responsive
                    </x-slot>
                    Your website will look great on any device...Phones, Tablets and computers

                </x-feature>

                <x-feature>
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </x-slot>
                    <x-slot name="title">
                      Search Engine Optimized
                    </x-slot>
                    Get your business recognized by ensuring your site is ranked in all major search engines.
                </x-feature>

                <x-feature>
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </x-slot>
                    <x-slot name="title">
                        Email Contact Form
                    </x-slot>
                    Your visitors can contact you directly from your website with your email contact form.
                </x-feature>
            </x-feature-container>
    </section>
@endsection
