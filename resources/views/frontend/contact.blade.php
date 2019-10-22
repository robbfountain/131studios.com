@extends('frontend.layouts.app')

@section('content')
   @banner
        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-gray-500 font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                Contact Us
            </h1>
        </div>
    @endbanner
    <section class="xs:py-3 lg:py-10">
        <div class="container mx-auto">


            <div class="flex lg:flex-row xs:flex-col">
                <div class="xs:w-full lg:w-3/4 xs:mr-0 lg:mr-8 xs:mb-6 lg:mb-0">
                    @include('frontend.contact-form')
                </div>
                <div class="xs:w-full lg:w-1/4">
                    <div class="flex">
                        <div class="mr-3">
                            <fa :icon="['fal','phone']" size="lg"></fa>
                        </div>
                        <div class="flex flex-col">
                            <h4 class="roboto font-semibold text-base mb-3">Phone</h4>
                            <div class="text-sm">
                                <a href="tel:1-301-992.0962" class="text-gray-600 no-underline">(301) 992-0962</a>
                            </div>
                        </div>
                    </div>

                    <div class="flex mt-6">
                        <div class="mr-3">
                            <fa :icon="['fal','envelope']" size="lg"></fa>
                        </div>
                        <div class="flex flex-col">
                            <h4 class="roboto font-semibold text-base mb-3">Email</h4>
                            <div class="text-sm">
                                <a href="mailto:robb@131studios.com" class="text-gray-600 no-underline">robb@131studios.com</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

@stop