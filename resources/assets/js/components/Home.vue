<template>
    <div>
        <div>
            <div class="banner bg-blue-darker text-center py-12">
                <img src="/images/logo-hero.png" alt="">
                <h1 class="text-white text-5xl mt-6 mb-1 font-light">131 Studios</h1>
                <h2 class="text-white text-xg font-light">Web Development, Web Design and Consulting</h2>
            </div>
        </div>

        <section class="border py-10">
            <div class="container mx-auto flex">
                <!-- Service Box -->
                <div class="mr-4 flex">
                    <div class="mr-3">
                        <div class="rounded-full border bg-grey-lighter p-6 text-center text-2xl">
                            <fa icon="code"></fa>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-medium">Title</h3>
                        <p class="leading-normal">Custom backend development, Content Management Systems and SaaS applications are just some of
                            the
                            development works we have done.</p>
                    </div>
                </div>

                <!-- Service Box -->
                <div class="mr-4 flex">
                    <div class="mr-3">
                        <div class="rounded-full border bg-grey-lighter p-6 text-center text-2xl">
                            <fa icon="code"></fa>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-medium">Title</h3>
                        <p class="leading-normal">Custom backend development, Content Management Systems and SaaS applications are just some of
                            the
                            development works we have done.</p>
                    </div>
                </div>

                <!-- Service Box -->
                <div class="mr-4 flex">
                    <div class="mr-3">
                        <div class="rounded-full border bg-grey-lighter p-6 text-center text-2xl">
                            <fa icon="code"></fa>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-medium">Title</h3>
                        <p class="leading-normal">Custom backend development, Content Management Systems and SaaS applications are just some of
                            the
                            development works we have done.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="border-t border-b border-blue-darker py-8 bg-blue-dark">
            <div class="container mx-auto">
                <div class="flex justify-center items-center">
                    <h2 class="text-4xl font-medium text-white mr-8">
                        Hire us for your next project
                    </h2>
                    <router-link to="/contact" class="border rounded-full border-white px-4 py-2 text-white no-underline text-xl hover:bg-white hover:text-blue-dark hover:border-transparent">Contact Us</router-link>
                </div>
                 </div>
        </section>
    </div>

</template>

<script>
    export default {}
</script>
