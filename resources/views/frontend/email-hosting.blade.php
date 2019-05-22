@extends('frontend.layouts.app')

@section('content')

    <div class="bg-cover lg:py-10 xs:pb-4 flex flex-col"
         style="background-image: url('images/web-design-greencastle-pa.png');">

        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-grey font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                Email Hosting
            </h1>
        </div>
    </div>

    <section class="py-10">
        <div class="container mx-auto">
            <div class="mb-4 text-base flex items-center p-2 bg-grey-lighter rounded">
                <fa :icon="['fas','home']" class="mr-2"></fa>
                <a href="/" class="text-blue no-underline mr-2">Home</a>
                <fa :icon="['far','chevron-right']" size="xs" class="mr-2"></fa>
                <a href="additional-services" class="text-blue no-underline mr-2">Additional Services</a>
                <fa :icon="['far','chevron-right']" size="xs" class="mr-2"></fa>
                Email Hosting
            </div>

            <div class="text-lg text-grey-darker mb-8 leading-normal">
               Let 131 Studios manage your email accounts and mailing lists. We can host your company's email
                with an unrivaled set of included features.  Our email hosting is backed by Google and comes with a wide range of features and starts at $7 per user monthly.
            </div>

            <div class="flex flex-row flex-wrap">
                <div class="flex p-3 w-1/4">
                    <div class="mr-4">
                        <fa :icon="['fal','at']" class="mr-2" size="3x"></fa>
                    </div>
                    <div class="flex flex-col text-blue-darker">
                        <h3 class="tracking-wide">Email @yourcompany.com</h3>
                        <div class="mt-2 leading-normal">
                            Send professional email from your business web address (you@yourcompany.com) and create group mailing lists like sales@yourcompany.com.
                        </div>
                    </div>
                </div>

                <div class="flex p-3 w-1/4">
                    <div class="mr-4">
                        <fa :icon="['fal','server']" class="mr-2" size="3x"></fa>
                    </div>
                    <div class="flex flex-col text-blue-darker">
                        <h3 class="tracking-wide">30GB Storage</h3>
                        <div class="mt-2 leading-normal">
                            30GB of online storage per user.  Share files, collaborate or store backups.
                        </div>
                    </div>
                </div>


                <div class="flex p-3 w-1/4">
                    <div class="mr-4">
                        <fa :icon="['fal','shield']" class="mr-2" size="3x"></fa>
                    </div>
                    <div class="flex flex-col text-blue-darker">
                        <h3 class="tracking-wide">Admin Controls</h3>
                        <div class="mt-2 leading-normal">
                            Add and remove users, set up groups, and add security options like 2-step verification and single-sign-on (SSO), all from one centralized admin console.
                        </div>
                    </div>
                </div>


                <div class="flex p-3 w-1/4">
                    <div class="mr-4">
                        <fa :icon="['fal','mobile-alt']" class="mr-2" size="3x"></fa>
                    </div>
                    <div class="flex flex-col text-blue-darker">
                        <h3 class="tracking-wide">Mobile Device Management</h3>
                        <div class="mt-2 leading-normal">
                            Keep your company data secure with device management that allows you to easily locate devices, require passwords, and erase data if needed.
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection