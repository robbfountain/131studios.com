@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
@endsection

@section('content')
       @banner
            <div class="container mx-auto">
                <div class="mb-8 text-center text-gray-300 tracking-wide xs:text-xl lg:text-4xl mt-6 mb-1">
                    <h1 class="">
                        Website Design, Hosting, Social Media Management & SEO.
                    </h1>
                </div>

                <section class="bg-transparent p-4">
                    <div class="flex justify-between xs:flex-col lg:flex-row">

                        <!-- Service Box -->
                        <div class="xs:hidden lg:inline xs:w-full lg:w-1/4 rounded-lg p-4 shadow-2xl mr-4 flex flex-col xs:mb-4"
                             style="background-color: rgba(0,0,0,0.5);">
                            <div class="text-center flex items-center lg:border-b border-gray-900 pb-4 lg:justify-center">
                                <div class="transition bg-gray-400 h-8 w-8 rounded-full inline-block align-middle p-1">
                                    <fa :icon="['fas','paint-brush']"
                                        class="text-gray-900 group-hover:text-white"></fa>
                                </div>
                                <h3 class="ml-4 text-xl tracking-wider font-normal text-gray-400 font-semibold">Website Design</h3>
                            </div>

                            <p class="mt-2 text-center leading-normal text-gray-400 ">
                                Stand out from your competitors with a professionally designed website from 131 Studios.
                            </p>

                            <div class="text-center mt-6">
                                <a href="/website-design" class="border border-blue-100 hover:bg-blue-400 hover:text-blue-900 rounded-full px-3 py-1 text-blue-100">
                                    Learn More
                                </a>
                            </div>
                        </div>

                        <!-- Service Box -->
                        <div class="xs:hidden lg:inline xs:w-full lg:w-1/4 rounded-lg p-4 shadow-2xl mr-4 flex flex-col xs:mb-4"
                             style="background-color: rgba(0,0,0,0.5);">
                            <div class="text-center flex items-center lg:border-b border-gray-900 pb-4 lg:justify-center">
                                <div class="transition bg-gray-400 h-8 w-8 rounded-full inline-block align-middle p-1">
                                    <fa :icon="['fas','server']" class="text-gray-900 group-hover:text-white"></fa>
                                </div>
                                <h3 class="ml-4 text-xl tracking-wider font-normal text-gray-400 font-semibold">Hosting</h3>
                            </div>

                            <p class="mt-2 text-center leading-normal text-gray-400 ">
                                Host your website on industry leading Private Servers that are 100%
                                maintained by us.</p>
                            <div class="text-center mt-6">
                                <a href="/hosting" class="border border-blue-100 hover:bg-blue-400 hover:text-blue-900 rounded-full px-3 py-1 text-blue-100">Learn
                                                                                                                More</a>
                            </div>
                        </div>

                        <!-- Service Box -->
                        <div class="xs:hidden lg:inline xs:w-full lg:w-1/4 rounded-lg p-4 shadow-2xl mr-4 flex flex-col xs:mb-4"
                             style="background-color: rgba(0,0,0,0.5);">
                            <div class="text-center flex items-center lg:border-b border-gray-900 pb-4 lg:justify-center">
                                <div class="transition bg-gray-400 h-8 w-8 rounded-full inline-block align-middle p-1">
                                    <fa :icon="['fas','share-alt']" class="text-gray-900 group-hover:text-white"></fa>
                                </div>
                                <h3 class="ml-4 text-xl tracking-wider font-normal text-gray-400 font-semibold">Social Media</h3>
                            </div>

                            <p class="mt-2 text-center leading-normal text-gray-400 ">
                            Get your business noticed by letting us manage you social media accounts. </p>
                            <div class="text-center mt-6">
                                <a href="/social-media" class="border border-blue-100 hover:bg-blue-400 hover:text-blue-900 rounded-full px-3 py-1 text-blue-100">Learn
                                                                                                                     More</a>
                            </div>
                        </div>

                        <!-- Service Box -->
                        <div class="xs:hidden lg:inline xs:w-full lg:w-1/4 rounded-lg p-4 shadow-2xl mr-4 flex flex-col xs:mb-4"
                             style="background-color: rgba(0,0,0,0.5);">
                            <div class="text-center flex items-center lg:border-b border-gray-900 pb-4 lg:justify-center">
                                <div class="transition bg-gray-400 h-8 w-8 rounded-full inline-block align-middle p-1">
                                    <fa :icon="['fas','search']" class="text-gray-900 group-hover:text-white"></fa>
                                </div>
                                <h3 class="ml-4 text-xl tracking-wider font-normal text-gray-400 font-semibold">SEO</h3>
                            </div>

                            <p class="mt-2 text-center leading-normal text-gray-400 ">
                                We'll make sure your customers can find you on the web by optimizing your website better placement.
                            </p>
                            <div class="text-center mt-6">
                                <a href="/seo" class="border border-blue-100 hover:bg-blue-400 hover:text-blue-900 rounded-full px-3 py-1 text-blue-100">
                                    Learn More</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        @endbanner


        <section class="lg:pt-6 lg:pb-10 xs:py-4 xs:px-3 lg:px-0 border-t" id="about">
            <div class="container mx-auto">
                <h2 class="text-center title text-blue-900 text-3xl mb-8">How Can We Help You?</h2>
                <div class="flex xs:flex-col lg:flex-row-reverse justify-between">
                    <div class="lg:relative xs:inline-block xs:w-full lg:w-1/2 xs:mb-3 lg:mb-0 lg:px-4">
                            <iframe src="https://player.vimeo.com/video/338294354"
                                    class="lg:absolute lg:pin-t lg:pin-l w-full border-4 rounded border-gray-300"
                                    style="width:100%; height:100%;" frameborder="0"
                                    allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                    <div class="xs:w-full lg:w-1/2 leading-normal text-lg text-gray-600 px-2">
                        <p class="mb-4">
                            We get it...It can be difficult to establish your online presence. From designing your
                            website or updating an existing site, there's a lot to handle.
                            We want to make this process easy for you.
                        </p>
                        <p class="mb-4">
                            We offer website design services, hosting, social media management and seo services to
                            ensure your business thrives in the digital world.
                        </p>
                        <p class="mb-4">
                            We service Greencastle, Hagerstown, Waynesboro, Chambersburg and the surrounding areas. We
                            have over 15 years experience in the industry and can help you get your business noticed
                            online.
                        </p>
                        <p>
                            Give us a call or send us an email today to see how we can help you.
                        </p>
                        <div class="text-center text-4xl mt-6 text-gray-600 font-semibold">
                            Call Us Today! <a href="tel:3019920962" class="text-blue-400">301.992.0962</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white border-t lg:py-12 xs:py-4 xs:px-3 lg:px-0 " id="blogs">
            <div class="container mx-auto">
                <h2 class="title font-medium text-blue-900 text-3xl mb-12">Latest From The Blog</h2>
                <div class="flex lg:flex-row xs:flex-col">
                    @foreach($blogs as $blog)
                        @include('frontend.blog.blog-item-front',['blog' => $blog])
                    @endforeach
                </div>
            </div>
        </section>

        <section class="border-t h-64">
            <div id="map_canvas" class="w-full min-h-full mb-8"></div>
        </section>
@stop