@extends('frontend.layouts.app')

@section('content')
    <div class="bg-cover lg:py-10 xs:pb-4 flex flex-col"
         style="background-image: url('images/web-design-greencastle-pa.png');">

        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-grey font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
               Social Media
            </h1>
        </div>
    </div>

    <section class="py-10">
        <div class="container mx-auto">
            <div class="mb-4 text-base flex items-center p-2 bg-grey-lighter rounded">
                <fa :icon="['fas','home']" class="mr-2"  ></fa>
                <a href="/" class="text-blue no-underline mr-2">Home</a>
                <fa :icon="['far','chevron-right']" size="xs" class="mr-2" ></fa>
               Social Media
            </div>
            <div class="flex">
                <div>
                    <div class="text-lg text-grey-darker pr-6 w-1/2">
                        <p class="mb-6">There are over 2 billion people using social media with Facebook having the greatest presence.  </p>

                        <p class="mb-6">We will work with your every step of the way to determine your needs and wants.
                            We'll make suggestions and recommendations to make sure you're getting what you want and we keep
                            you informed every step of the process</p>
                        <p>
                            If you currently have a website and just want to make some changes, we can help you out. Just
                            give us
                            a call and let us know how we can help you.
                        </p>

                        <div class="text-center text-4xl mt-6 text-grey-darkest font-semibold">
                            Call Us Today! <span class="text-blue">301.992.0962</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endsection