@extends('frontend.layouts.app')

@section('content')
   <x-banner>
        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-gray-500 font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                Social Media
            </h1>
        </div>
    </x-banner>

    <section class="xs:py-3 lg:py-10">
        <div class="container mx-auto">
            <div class="flex lg:flex-row xs:flex-col-reverse">
                <div class="xs:w-full lg:w-1/2 lg:mb-0 xs:mb-3">
                    <div class="text-lg text-gray-600 leading-normal pr-6">
                        <p class="mb-6">
                            There are over 2 billion people on social media networks worldwide.
                            Your Facebook, Instagram and LinkedIn profiles will speak volumes and paired with
                            a beautiful <a href="/website-design" class="no-underline text-blue">website</a> can drive people to your business.
                        </p>

                        <p class="mb-6">
                            We know there's a lot to think about and social media may not always be on the top of your list. Leave your social media profile up to us. We have a variety of social media packages to help you
                            manage your profiles.
                        </p>

                        <div class="text-center text-4xl mt-6 text-gray-600 font-semibold">
                            Call Us Today! <span class="text-blue-400">301.992.0962</span>
                        </div>
                    </div>
                </div>
                <div class="xs:w-full lg:w-1/2 lg:mb-0 xs:mb-3">
                    <img src="https://res.cloudinary.com/onethirtyone/image/upload/v1558745037/131%20Studios/social-media_q5exku.jpg" alt="Social Media">
                </div>
            </div>
        </div>
    </section>
@endsection
