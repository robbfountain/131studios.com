@extends('frontend.layouts.app')

@section('content')
    <div class="bg-cover lg:py-10 xs:pb-4 flex flex-col"
         style="background-image: url('images/web-design-greencastle-pa.png');">

        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-grey font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
               Contact Us
            </h1>
        </div>
    </div>
	<section class="py-10">
        <div class="container mx-auto">
            <div class="flex">
                <div class="w-3/4 mr-8">
                    @include('frontend.contact-form')
                </div>
                <div class="w-1/4">
                    <div class="flex">
                        <div class="mr-3">
                            <fa :icon="['fal','phone']" size="lg"></fa>
                        </div>
                        <div class="flex flex-col">
                            <h4 class="roboto font-semibold text-base mb-3">Phone</h4>
                            <div class="text-sm">
                                <a href="tel:1-301-992.0962" class="text-grey-darker no-underline">(301) 992-0962</a>
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
                                <a href="mailto:robb@131studios.com" class="text-grey-darker no-underline">robb@131studios.com</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

@stop