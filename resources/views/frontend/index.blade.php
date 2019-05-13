@extends('frontend.layouts.app')

@section('content')
    <div>
        <div class="bg-cover lg:py-10 xs:pb-4 flex flex-col"
             style="background-image: url('images/web-design-greencastle-pa.png');">

            <h1 class="mb-8 inline-block text-center text-grey font-normal tracking-wide text-4xl mt-6 mb-1">
                Website Design, Hosting, Social Media Management & SEO.
            </h1>

            <section class="bg-transparent p-4 " id="services">
                <div class="flex justify-between xs:flex-col lg:flex-row ">

                    <!-- Service Box -->
                    <div class="w-1/4 rounded-lg p-4 border mr-4 flex flex-col xs:mb-4"
                         style="background-color: rgba(0,0,0,0.6);">
                        <div class="text-center flex items-center border-b pb-4 justify-center">
                            <div class="transition bg-white p-2 rounded-full inline-block align-middle">
                                <fa :icon="['fas','paint-brush']" class="text-blue-dark group-hover:text-white"></fa>
                            </div>
                            <h3 class="ml-4 text-2xl tracking-wide font-normal text-grey-light">Website Design</h3>
                        </div>

                        <p class="mt-2 text-center leading-normal text-grey text-base">
                            Stand out from your competitors with a professionally designed website from 131 Studios.
                        </p>

                        <div class="text-center mt-6">
                            <a href="/website-design" class="border rounded px-4 py-2 text-teal-dark no-underline">
                                Learn More
                            </a>
                        </div>
                    </div>

                    <!-- Service Box -->
                    <div class="w-1/4 rounded-lg p-4 border mr-4 flex flex-col xs:mb-4"
                         style="background-color: rgba(0,0,0,0.6);">
                        <div class="text-center flex items-center border-b pb-4 justify-center">
                            <div class="transition bg-white p-2 rounded-full inline-block align-middle">
                                <fa :icon="['fas','server']" class="text-blue-dark group-hover:text-white"></fa>
                            </div>
                            <h3 class="ml-2 text-2xl tracking-wide font-normal text-grey-light">Hosting</h3>
                        </div>

                        <p class="mt-2 text-center leading-normal text-grey text-base">
                            We can host your website on industry leading Virtual Private Servers (VPS) that are 100%
                            maintained by us.</p>
                        <div class="text-center mt-6">
                            <a href="/website-design" class="border rounded px-4 py-2 text-teal-dark no-underline">Learn
                                                                                                                   More</a>
                        </div>
                    </div>

                    <!-- Service Box -->
                    <div class="w-1/4 rounded-lg p-4 border mr-4 flex flex-col xs:mb-4"
                         style="background-color: rgba(0,0,0,0.6);">
                        <div class="text-center flex items-center border-b pb-4 justify-center">
                            <div class="transition bg-white p-2 rounded-full inline-block align-middle">
                                <fa :icon="['fas','share-alt']" class="text-blue-dark group-hover:text-white"></fa>
                            </div>
                            <h3 class="ml-4 text-2xl tracking-wide font-normal text-grey-light">Social Media</h3>
                        </div>

                        <p class="mt-2 text-center leading-normal text-grey text-base">
                            Your digital presence is more than just your website. Social media plays a huge role in
                            getting your business noticed. We can setup and manage your social media accounts. </p>
                        <div class="text-center mt-6">
                            <a href="/website-design" class="border rounded px-4 py-2 text-teal-dark no-underline">Learn
                                                                                                                   More</a>
                        </div>
                    </div>

                    <!-- Service Box -->
                    <div class="w-1/4 rounded-lg p-4 border mr-4 flex flex-col xs:mb-4"
                         style="background-color: rgba(0,0,0,0.6);">
                        <div class="text-center flex items-center border-b pb-4 justify-center">
                            <div class="transition bg-white p-2 rounded-full inline-block align-middle">
                                <fa :icon="['fas','search']" class="text-blue-dark group-hover:text-white"></fa>
                            </div>
                            <h3 class="ml-4 text-2xl tracking-wide font-normal text-grey-light">SEO</h3>
                        </div>

                        <p class="mt-2 text-center leading-normal text-grey text-base">
                            Your customers need to be able to find you on the web. We can make sure your business is
                            listed where it should be.
                        </p>
                        <div class="text-center mt-6">
                            <a href="/website-design" class="border rounded px-4 py-2 text-teal-dark no-underline">
                                Learn More</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="bg-grey-lightest lg:pt-6 lg:pb-10 xs:py-4 xs:px-3 lg:px-0 border-t" id="about">
            <div class="container mx-auto">
                <h2 class="text-center title font-medium text-blue-darker text-3xl mb-8">How can We Help <span
                            style="background-color: rgba(0,0,0,0.5);" class="text-white px-3 py-1">You?</span></h2>
                <div class="flex flex-row-reverse justify-between">
                    <div class="w-1/2">
                        <img src="/images/family.jpg" alt="The Family" class="p-1 bg-white border">
                    </div>
                    <div class="w-1/2 leading-normal text-lg text-grey-dark px-2">
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
                        <div class="text-center text-4xl mt-6 text-grey-darkest font-semibold">
                            Call Us Today! <span class="text-blue">301.992.0962</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white border-t lg:py-8 xs:py-4 xs:px-3 lg:px-0 " id="blogs">
            <div class="container mx-auto">
                <div class="text-center">
                    <h2 class="title font-medium text-blue-darker text-3xl mb-8">Latest From The Blog</h2>
                </div>
                <div class="flex">
                    @foreach($blogs as $blog)
                        <article class="w-1/4 mr-3 border rounded shadow">
                            <h4 class="p-2 text-center font-semibold tracking-loose text-blue">
                                {{$blog->title}}
                            </h4>
                            
                            <div class="my-3">
                                <img src="{{$blog->image}}" alt="{{$blog->title}}">
                            </div>
                            
                            <div class="text-center mt-6 mb-4">
                                <a class="rounded border text-blue tracking-loose px-4 py-2 border-blue no-underline" href="blog/{{$blog->slug}}">Read More</a>
                            </div>

                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="lg:py-10 xs:py-4 xs:px-3 lg:px-0 bg-grey-lightest border-t" id="projects">
            <div class="container mx-auto">
                <div class="text-center">
                    <h2 class="title font-medium text-blue-darker text-3xl mb-8">Recent Work</h2>
                </div>

                <div class="owl-carousel owl-theme">
                    <!-- Project -->
                    @foreach($projects as $project)
                        <div class="border xs:pb-4 rounded-t lg:mr-3 h-half">
                            <div class="h-64 overflow-hidden border-b">
                                <img src="{{'/storage/'. $project->primary_image}}" alt="" class="">
                            </div>

                            <div class="px-6 py-4">
                                <h2 class="font-semibold text-grey-darker tracking-wide text-lg mb-2">{{$project->title}}</h2>
                                <p class="text-grey-dark leading-normal text-sm">{{ $project->description }}
                                </p>
                            </div>
                            <div class="px-6">
                                @if($project->url)
                                    <a href="{{$project->url}}" Target="_blank"
                                       class="no-underline text-grey-darker text-sm hover:text-grey hover:underline">
                                        <fa :icon="['far','external-link']" class="mr-px"></fa>
                                        Visit Website
                                    </a>
                                @endif
                            </div>
                            <div class="px-6 py-4">
                                @foreach($project->tags as $tag)
                                    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#{{$tag->name}}</span>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <section class="border-t pb-8 xs:px-3 lg:px-0 bg-white" id="contact">
            <div id="map_canvas" class="h-64 w-full mb-8"></div>
            <div class="container mx-auto">
                <div class="text-center px-2">
                    <h2 class="title font-medium text-blue-darker text-3xl">Contact Us</h2>
                </div>
                <div class="flex xs:flex-col lg:flex-row justify-between mt-6 ">
                    <div class="lg:w-1/2 px-4 border-r xs:w-full mr-6 xs:mb-6 lg:mb-0">
                        @include('frontend.contact-form')
                    </div>

                    <div class="flex flex-col flex-1">
                        <div class="xs:mb-6 lg:mb-0 rounded  p-4 flex items-center border-b  ">
                            <div class="mr-3 align-right">
                                <fa :icon="['fal','map-pin']" size="2x" class="text-orange"></fa>
                            </div>

                            <div class="text-sm text-left text-grey-dark">
                                <p>P.O. Box 704 <br/>Greencastle, PA 17225</p>
                            </div>
                        </div>

                        <div class="xs:mb-6 lg:mb-0 rounded p-4 flex items-center border-b ">
                            <div class="mr-3 text-right">
                                <fa :icon="['fal','envelope']" size="2x" class="text-orange"></fa>
                            </div>

                            <div class="text-sm text-left text-grey-dark">
                                <a href="mailto:robb@131studios.com"
                                   class="text-blue-dark no-underline">robb@131studios.com</a>
                            </div>
                        </div>

                        <div class="xs:mb-6 lg:mb-0 rounded  p-4 flex items-center border-b ">
                            <div class="mr-3 text-right">
                                <fa :icon="['fal','mobile-alt']" size="2x" class="text-orange"></fa>
                            </div>

                            <div class="text-sm text-left text-grey-dark">
                                (301) 992-0962
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="border-t py-8 bg-white">
            <div class="container mx-auto">
                <div class="text-center px-2">
                    <h2 class="title font-medium text-blue-darker text-3xl">Platforms We Use</h2>
                </div>
                <div class="flex flex-wrap justify-between items-center justify-center mt-8 xs:flex-col lg:flex-row">
                    <img src="/images/logos/laravel.png" alt="Laravel Logo"
                         class="h-12 xs:mb-8 lg:mb-0 lg:mr-6 ">
                    <img src="/images/logos/digital-ocean.png" alt="DigitalOcean Logo"
                         class="h-12 xs:mb-8 lg:mb-0 lg:mr-6 ">
                    <img src="/images/logos/php.png" alt="PHP Logo" class="h-12 xs:mb-8 lg:mb-0 lg:mr-6 ">
                    <img src="/images/logos/forge.png" alt="Laravel Forge Logo"
                         class="h-12 xs:mb-8 lg:mb-0 lg:mr-6 ">
                    <img src="/images/logos/vue.png" alt="Vue Logo" class="h-12 xs:mb-8 lg:mb-0 lg:mr-6 ">
                    <img src="/images/logos/jQuery-Logo.png" alt="jQuery Logo"
                         class="h-12 xs:mb-8 lg:mb-0 lg:mr-6 ">
                </div>
            </div>
        </section>
        <modal v-show="modal">
            <quote slot="body"/>
        </modal>
    </div>
@stop