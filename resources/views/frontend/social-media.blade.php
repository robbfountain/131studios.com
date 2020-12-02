@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
@endsection

@section('content')
    <x-banner>
        Social Media
        <x-slot name="titleExpanded">Management</x-slot>
    </x-banner>

    <x-service-offering service="Social Media Management"
                        image="https://res.cloudinary.com/onethirtyone/image/upload/v1558745037/131%20Studios/social-media_q5exku.jpg">
        <p class="mb-6">
            There are over 2 billion people on social media networks worldwide.
            Your Facebook, Instagram and LinkedIn profiles will speak volumes and paired with
            a beautiful <a href="/website-design" class="no-underline text-blue">website</a> can drive
            people to your business.
        </p>

        <p class="mb-6">
            We know there's a lot to think about and social media may not always be on the top of your
            list. Leave your social media profile up to us. We have a variety of social media packages
            to help you
            manage your profiles.
        </p>

        <div class="text-center text-4xl mt-6 text-gray-600 font-semibold">
            Call Us Today! <span class="text-blue-500 hover:text-blue-800 transition ease-in-out duration-150">301.992.0962</span>
        </div>
    </x-service-offering>
@endsection
