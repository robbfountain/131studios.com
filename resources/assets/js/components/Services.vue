<template>
    <div>
        <div class="banner bg-blue-darker text-center xs:px-2 xs:py-2 lg:py-12">
            <h1 class="text-white text-5xl mt-6 mb-1 font-light">What We Do</h1>
        </div>

        <section class="mt-8">

        </section>

        <section class="mt-8 py-8">
            <div class="container mx-auto">
                <div class="flex">
                    <!-- Service Card -->
                    <div class="lg:w-1/2 rounded overflow-hidden shadow-lg mr-8">
                        <img src="images/code.jpg" alt="" class="w-full">
                        <div class="p-4">
                            <h2 class="text-2xl text-grey-darkest">Web Development</h2>
                            <p class="text-grey-darkest leading-normal mt-4">
                                We have over 15 years of web development experience and can custom design almost any
                                functional aspect of your website. From updating your current website to designing a new
                                website for your business, we have the creative experience to help. We specialize in
                                backend development, CMS, Administrator panels, CRM, Contact Forms, Forums, Online
                                Contests, eCommerce solutions and much more
                            </p>
                            <div class="mt-8">
                                <router-link to="/quote"
                                             class="border rounded border-orange-dark px-4 py-2 no-underline text-white bg-orange hover:bg-orange-dark">
                                    Get a Quote
                                    <fa icon="chevron-right"></fa>
                                </router-link>
                            </div>
                        </div>

                    </div>
                    <!-- Service Card -->
                    <div class="lg:w-1/2 rounded overflow-hidden shadow-lg mr-8">
                        <img src="images/hosting.jpg" alt="" class="w-full">
                        <div class="p-4">
                            <h2 class="text-2xl text-grey-darkest">Hosting & Maintenance</h2>
                            <p class="text-grey-darkest leading-normal mt-4">
                                We offer robust hosting services at reasonable prices. We host all of our websites on
                                our own dedicated VPS servers. We offer SSL certificates for all of our websites as a
                                standard feature and all of our hosting plans include monthly maintenance.
                            </p>
                            <div class="mt-8">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

</template>

<script>
    export default {}
</script>