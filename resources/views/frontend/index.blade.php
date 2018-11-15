@extends('frontend.layouts.app')
@section('content')
    <div>
        <div class="bg-white lg:py-10 xs:pb-4 flex flex-col">
            <div class="container mx-auto flex xs:flex-col lg:flex-row justify-center items-center">
                <div class="lg:mr-6 xs:mb-8 px-2 -mt-8">
                    <h1 class="text-blue-darker text-5xl mt-6 mb-1">Web Development, Web Design and Consulting</h1>
                    <p class="mt-8 text-xl text-grey-dark">We specialize in offering a wide range of web and IT services
                        for your business. Contact us for a quote.</p>
                </div>
                <div class="">
                    <img src="/images/heroimg.png" alt="131 Studios Logo" class="px-2 max-h-screen">
                </div>
            </div>
            <div class="text-center lg:flex-1 lg:-mt-6">
                <fa :icon="['fas','arrow-down']" size="2x" class="text-blue-darker animated bounce infinite slow"></fa>
            </div>
        </div>

        <section class="bg-grey-lightest xs:py-4 lg:py-6 px-2 border-t" id="services">
            <div class="text-center">
                <h2 class="title font-medium text-blue-darker text-3xl mb-8">Services</h2>
            </div>
            <div class="container mx-auto flex justify-between xs:flex-col lg:flex-row ">

                <!-- Service Box -->
                <div class="rounded-lg p-4 group mr-4 flex flex-col xs:mb-4 hover:bg-grey-light">
                    <div class="text-center flex justify-center">
                        <div class="transition group-hover:bg-blue-darker group-hover:text-white rounded-full border bg-grey-lightest p-6 text-center text-2xl">
                            <fa :icon="['fas','code']" size="xl" class="text-orange-light group-hover:text-white"></fa>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <h3 class="text-2xl font-bold text-blue-darkest">Web Development</h3>
                        <p class="leading-normal text-grey-dark mt-4 text-sm">Custom backend development, Content
                            Management Systems, Online
                            Contests, Custom Applications, Shopping Carts, Online Stores.</p>
                    </div>
                </div>

                <!-- Service Box -->
                <div class="rounded-lg p-4 group mr-4 flex flex-col xs:mb-4 hover:bg-grey-light">
                    <div class="text-center flex justify-center">
                        <div class="transition group-hover:bg-blue-darker group-hover:text-white rounded-full border bg-grey-lightest p-6 text-center text-2xl">
                            <fa :icon="['fas','desktop-alt']" size="xl"
                                class="text-orange-light group-hover:text-white"></fa>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <h3 class="text-2xl font-bold text-blue-darkest">Application Development</h3>
                        <p class="leading-normal text-grey-dark mt-4 text-sm">Custom backend development, Content
                            Management Systems, Online
                            Contests, Custom Applications, Shopping Carts, Online Stores.</p>
                    </div>
                </div>

                <!-- Service Box -->
                <div class="rounded-lg p-4 group mr-4 flex flex-col xs:mb-4 hover:bg-grey-light">
                    <div class="text-center flex justify-center">
                        <div class="transition group-hover:bg-blue-darker group-hover:text-white rounded-full border bg-grey-lightest p-6 text-center text-2xl">

                            <fa :icon="['fas','paint-brush']" size="xl"
                                class="text-orange-light group-hover:text-white"></fa>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <h3 class="text-2xl font-bold text-blue-darkest">Web Design</h3>
                        <p class="leading-normal text-grey-dark mt-4 text-sm">We offer services to completely redesign
                            your current website or
                            create you a brand new website. </p>
                    </div>
                </div>

                <!-- Service Box -->
                <div class="rounded-lg p-4 group mr-4 flex flex-col xs:mb-4 hover:bg-grey-light">
                    <div class="text-center flex justify-center">
                        <div class="transition group-hover:bg-blue-darker group-hover:text-white rounded-full border bg-grey-lightest p-6 text-center text-2xl">
                            <fa :icon="['fas','server']" size="xl"
                                class="text-orange-light group-hover:text-white"></fa>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <h3 class="text-2xl font-bold text-blue-darkest">Hosting</h3>
                        <p class="leading-normal text-grey-dark mt-4 text-sm">We offer powerful VPS hosting systems for
                            your website and we take
                            care of everything from server maintenance to application deployment.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="banner border-t border-b border-blue-darkest py-12 bg-blue-darker">
            <div class="container mx-auto">
                <div class="flex justify-center items-center px-2 flex-col">
                    <h2 class="text-5xl font-bold text-white xs:text-center">
                        Hire us for your next project
                    </h2>
                    <div class="mt-10">
                        <a href="#contact" v-smooth-scroll="{duration: 500}"
                           class="border rounded-full border-white px-4 py-3 text-white no-underline text-2xl hover:bg-white hover:text-blue-dark hover:border-transparent">
                            Get A Quote
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="lg:py-10 xs:py-4 bg-white" id="projects">
            <div class="container mx-auto">
                <div class="text-center">
                    <h2 class="title font-medium text-blue-darker text-3xl mb-8">Recent Work</h2>
                </div>

                <div class="owl-carousel owl-theme">
                    <!-- Project -->
                    @foreach($projects as $project)
                        <div class="shadow-lg rounded overflow-hidden xs:pb-4 lg:mr-6">
                            <img src="{{$project->primary_image}}" alt="" class="">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">{{$project->title}}</div>
                                <p class="text-grey-darker">{{$project->description}}
                                </p>
                            </div>
                            <div class="px-6 py-4">
                                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>\
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="border-t py-8 bg-grey-lightest" id="contact">
            <div class="container mx-auto">
                <div class="text-center px-2">
                    <h2 class="title font-medium text-blue-darker text-3xl">Contact Us</h2>
                </div>
                <div class="flex justify-between xs:flex-col lg:flex-row my-6">
                    <div class="w-1/4 rounded shadow-lg p-4 text-center flex flex-col bg-white">
                        <div class="mb-3">
                            <fa :icon="['fal','map-pin']" size="2x" class="text-orange" ></fa>
                        </div>

                        <div class="text-sm text-grey-dark">
                            <p>P.O. Box 704 <br />Greencastle, PA 17225</p>
                        </div>

                    </div>
                    <div class="w-1/4 rounded shadow-lg p-4 text-center flex flex-col bg-white">
                        <div class="mb-3">
                            <fa :icon="['fal','envelope']" size="2x" class="text-orange" ></fa>
                        </div>

                        <div class="text-sm text-grey-dark">
                            <a href="mailto:robb@131studios.com" class="text-blue-dark no-underline">robb@131studios.com</a>
                        </div>

                    </div>

                    <div class="w-1/4 rounded shadow-lg p-4 text-center flex flex-col bg-white">
                        <div class="mb-3">
                            <fa :icon="['fal','mobile-alt']" size="2x" class="text-orange" ></fa>
                        </div>

                        <div class="text-sm text-grey-dark">
                           (301) 992-0962
                        </div>

                    </div>
                </div>
                <contact></contact>
            </div>
        </section>

        <section class="border-t py-8 bg-white">
            <div class="container mx-auto">
                <div class="text-center px-2">
                    <h2 class="title font-medium text-blue-darker text-3xl">Platforms We Use</h2>
                </div>
                <div class="flex flex-wrap justify-between items-center justify-center mt-8 xs:flex-col lg:flex-row">
                    <img src="/images/logos/laravel.png" alt="Laravel Logo"
                         class="h-12 xs:mb-4 lg:mb-0 lg:mr-6 xs:mb-4">
                    <img src="/images/logos/digital-ocean.png" alt="DigitalOcean Logo"
                         class="h-12 xs:mb-4 lg:mb-0 lg:mr-6 xs:mb-4">
                    <img src="/images/logos/php.png" alt="PHP Logo" class="h-12 xs:mb-4 lg:mb-0 lg:mr-6 xs:mb-4">
                    <img src="/images/logos/forge.png" alt="Laravel Forge Logo"
                         class="h-12 xs:mb-4 lg:mb-0 lg:mr-6 xs:mb-4">
                    <img src="/images/logos/vue.png" alt="Vue Logo" class="h-12 xs:mb-4 lg:mb-0 lg:mr-6 xs:mb-4">
                    <img src="/images/logos/jQuery-Logo.png" alt="jQuery Logo"
                         class="h-12 xs:mb-4 lg:mb-0 lg:mr-6 xs:mb-4">
                </div>
            </div>
        </section>
        <modal v-show="modal">
            <quote slot="body" />
        </modal>
    </div>
@stop