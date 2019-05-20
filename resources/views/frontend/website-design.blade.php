@extends('frontend.layouts.app')

@section('content')
    <div class="bg-cover lg:py-10 xs:pb-4 flex flex-col"
         style="background-image: url('images/web-design-greencastle-pa.png');">

        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-grey font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                Website Design
            </h1>
        </div>

    </div>

    <section class="py-10">
        <div class="container mx-auto">
            <div class="mb-4 text-base flex items-center p-2 bg-grey-lighter rounded">
                <fa :icon="['fas','home']" class="mr-2"  ></fa>
                <a href="/" class="text-blue no-underline mr-2">Home</a>
                <fa :icon="['far','chevron-right']" size="xs" class="mr-2" ></fa>
                Website Design
            </div>
            <div class="flex">
                <div class="text-lg text-grey-darker pr-6">
                    <p class="mb-6">Let's face it, in today's digital world your business needs a website that stands our from your
                       competitors.
                       131 Studios designs custom websites for our clients that meet the needs of their business. </p>

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

                <div class="p-4 bg-grey-lighter">
                    <h2 class="text-center title font-medium text-blue-darker text-3xl mb-8">Standard Features</h2>
                    <ul class="text-lg text-grey-darker list-reset">
                        <li class="mb-3 text-base"><fa :icon="['far','check']" class="mr-2 text-green"  ></fa>Mobile and Desktop Optimized. Your website looks great on phones, tablets and computers</li>
                        <li class="mb-3 text-base"><fa :icon="['far','check']" class="mr-2 text-green"  ></fa>
                            <a href="/seo" class="text-blue hover:text-blue-dark no-underline">Search Engine Optimization</a></li>
                        <li class="mb-3 text-base"><fa :icon="['far','check']" class="mr-2 text-green"  ></fa>Website submitted to all major search engines (Google, Bing, Yahoo)</li>
                        <li class="mb-3 text-base"><fa :icon="['far','check']" class="mr-2 text-green"  ></fa>Email Contact Form</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10">
        <div class="container mx-auto flex">
            <div class="flex p-3 w-1/4">
                <div class="mr-4">
                    <fa :icon="['fal','mobile-alt']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">Mobile Optimized</h3>
                    <div class="mt-2">
                       Your website is optimized for phones, tablets and desktop computers.
                    </div>
                </div>
            </div>


            <div class="flex p-3 w-1/4">
                <div class="mr-4">
                    <fa :icon="['fal','search']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">Search Engine Optimized</h3>
                    <div class="mt-2">
                        Get your business recognized by ensuring your site is ranked in all major search engines.
                    </div>
                </div>
            </div>


            <div class="flex p-3 w-1/4">
                <div class="mr-4">
                    <fa :icon="['fal','envelope']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">Email Contact Form</h3>
                    <div class="mt-2">
                        Your visitors can contact you directly from your website with your email contact form.
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-grey-lightest py-8">
        <div class="container mx-auto p-2">
            <h2 class="text-center title font-medium text-blue-darker text-3xl mb-8">Additional Products & Services </h2>
            <p class="text-center text-lg">
                In addition to website design we offer a range of additional services
            </p>
            <div class="flex p-3 w-1/4">
                <div class="mr-4">
                    <fa :icon="['fal','search']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">Search Engine Optimized</h3>
                    <div class="mt-2">
                        Get your business recognized by ensuring your site is ranked in all major search engines.
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection