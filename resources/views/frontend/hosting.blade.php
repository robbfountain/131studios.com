@extends('frontend.layouts.app')

@section('content')
    <div class="bg-cover lg:py-10 xs:pb-4 flex flex-col"
         style="background-image: url('images/web-design-greencastle-pa.png');">

        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-grey font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                Web Hosting
            </h1>
        </div>
    </div>

    <section class="py-10">
        <div class="container mx-auto">
            <div class="mb-4 text-base flex items-center">
                <fa :icon="['fas','home']" class="mr-2"></fa>
                <a href="/" class="text-blue no-underline mr-2">Home</a>
                <fa :icon="['far','chevron-right']" size="xs" class="mr-2"></fa>
                Website Hosting
            </div>

            <div class="flex">
                <div class="px-2">
                    <h2 class="text-center title font-medium text-blue-darker text-3xl mb-8">
                        Web Hosting for Greencastle, Chambersburg and Hagerstown
                    </h2>

                    <div class="text-lg text-grey-darkest leading-normal">
                        <p class="mb-4">
                            In addition to website design and web app development we can host your website on one
                            of our lightning fast private servers.
                        </p>

                        <p class="mb-4">We utilize industry leading virtual private servers from some of the top names
                                        in the industry
                                        such as Amazon, Digital Ocean and Linode.</p>

                        <p class="mb-4">Your website hosted with 131 Studios will comes with loads of features including
                                        lightning
                                        fast response times, security and support</p>
                    </div>
                </div>
                <div class="bg-grey-lighter">
                    lkjlkj
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 bg-grey-lightest">
        <div class="flex container mx-auto">
            <div class="flex p-3 w-1/4">
                <div class="mr-4">
                    <fa :icon="['fal','database']" class="mr-2" size="3x"></fa>
                </div>
                <div class="text-blue-darker flex flex-col">
                    <h3 class="tracking-wide">MySQL Databases</h3>
                    <div class="mt-3">
                        Unlimited MySQL databases with nightly backups.
                    </div>
                </div>
            </div>

            <div class="flex p-3 w-1/4">
                <div class="mr-4">
                    <fa :icon="['fal','shield']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">Unmatched Security</h3>
                    <div class="mt-3 ">
                        Firewall with access control. SSH access and 24/7 monitoring.
                    </div>
                </div>
            </div>

            <div class="flex p-3 w-1/4">
                <div class="mr-4">
                    <fa :icon="['fal','wrench']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">Top Notch Support </h3>
                    <div class="mt-2">
                        1 Hour of professional maintenance per month. 99.9% uptime guarantee
                    </div>
                </div>
            </div>

            <div class="flex p-3 w-1/4">
                <div class="mr-4">
                    <fa :icon="['fal','envelope']" class="mr-2" size="3x"></fa>
                </div>
                <div class="flex flex-col text-blue-darker">
                    <h3 class="tracking-wide">Email Options</h3>
                    <div class="mt-2">
                        30GB Storage, Cloud Drive Storage, Ultimate Spam Protection and More. Starting at $6/user
                        monthly
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection