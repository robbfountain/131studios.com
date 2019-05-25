@extends('frontend.layouts.app')

@section('content')
    @include('frontend.partials.banner')

        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-grey font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
               SEO
            </h1>
        </div>
    </div>

    <section class="xs:py-3 lg:py-10">
        <div class="container mx-auto">
            <div class="mb-4 text-base flex items-center p-2 bg-grey-lighter rounded">
                <fa :icon="['fas','home']" class="mr-2"></fa>
                <a href="/" class="text-blue no-underline mr-2">Home</a>
                <fa :icon="['far','chevron-right']" size="xs" class="mr-2"></fa>
                SEO
            </div>


            <div class="flex lg:flex-row xs:flex-col-reverse">
                <div class="xs:w-full lg:w-1/2 xs:mb-3 lg:mb-0">
                    <div class="text-lg text-grey-darker pr-6 leading-normal">
                        <p class="mb-6">
                            Your website is the first step in getting your business recognized on the web.
                            Having organic traffic to your website and providing relevant content
                            will help rank your website towards the top of major search engines such as Google, Bing and Yahoo!.
                            Our SEO services will help put your business on the map and get recognized.
                        </p>

                        <p class="mb-6">
                            There are many steps involved with search engine optimization and they can be confusing and frustrating.  We know you don't have
                            time to worry about this crucial step so let us do this for you.
                        </p>

                        <p class="mb-6">
                            We'll start with a <span class="font-semibold">FREE</span> SEO analysis that provides a starting point
                            for improving your website's rank.  From there we will optimize your site to make sure you're not penalized for irrelevant
                            content and ensure your website stands out in search engines
                        </p>

                        <p class="mb-6">
                            From there we'll offer recommendations and can even implement the changes we recommend.  We'll continuously monitor your rankings and
                            make necessary changes to help you get to the top.
                        </p>
                        
                        <div class="text-center text-4xl mt-6 text-grey-darkest font-semibold">
                            Call Us Today! <span class="text-blue">301.992.0962</span>
                        </div>
                    </div>

                </div>
                <div class="xs:w-full lg:w-1/2 xs:mb-3 lg:mb-0">
                    <img src="/images/seo.jpg" alt="SEO">
                </div>
            </div>
        </div>
    </section>
@endsection