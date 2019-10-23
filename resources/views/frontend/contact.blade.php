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
            <div class="flex lg:flex-row xs:flex-col pt-4">
                <div class="xs:w-full lg:w-1/4 mr-8">
                    <h2 class="text-lg text-blue-800 mb-3">Contact Us</h2>
                    <p class="text-base text-gray-600">Drop us a line and we'll get back to you as soon as possible.</p>
                </div>
                <div class="xs:w-full lg:w-1/2 xs:mr-0 xs:mb-6 lg:mb-0">
                    @include('frontend.contact-form')
                </div>
            </div>
        </div>
    </section>

@stop