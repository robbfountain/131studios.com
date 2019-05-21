@extends('frontend.layouts.app')

@section('content')
    <div class="bg-cover lg:py-10 xs:pb-4 flex flex-col"
         style="background-image: url('images/web-design-greencastle-pa.png');">

        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-grey font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
               SEO
            </h1>
        </div>
    </div>

    <section class="py-10">
        <div class="container mx-auto">
            <div class="mb-4 text-base flex items-center p-2 bg-grey-lighter rounded">
                <fa :icon="['fas','home']" class="mr-2"></fa>
                <a href="/" class="text-blue no-underline mr-2">Home</a>
                <fa :icon="['far','chevron-right']" size="xs" class="mr-2"></fa>
                SEO
            </div>

            <h2 class="title roboto">SEO</h2>
            <div class="flex">
                <div class="w-1/2">
                    <div class="text-lg text-grey-darker pr-6">
                        <p class="mb-6">
                            Your business' website is a crucial part of your business but you also need to be found
                            on search engines.  Having organic traffic to your website and providing relevant content
                            will help rank your website towards the top of major searh engines such as Google, Bing and Yahoo!.
                        </p>

                        <p class="mb-6">
                            Our SEO services will help put your business on the map and get recognized.
                        </p>

                        <p class="mb-6">
                            We start with a <span class="font-semibold">FREE</span> SEO analysis that provides a starting point
                            for improving your website's rank.
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