<template>
    <div>
        <div class="banner bg-blue-darker text-center xs:px-2 xs:py-2 lg:py-12">
            <h1 class="text-white text-5xl mt-6 mb-1 font-light">About Us</h1>
        </div>

        <section class="mt-8 py-8">
            <div class="flex">
                <div class="w-1/2 p-10">
                    <h2 class="text-3xl text-grey-darker">Who We Are</h2>
                    <p class="text-lg leading-normal mb-10">
                        We have been in in the web development and IT industry for 15 years. We have a wide range of knowledge of leading industry trends and can help you with your web and IT needs.
                    </p>
                    <router-link to="/services"
                                 class="rounded-full border border-blue-dark bg-transparent text-blue-dark uppercase text-sm px-8 py-4 no-underline hover:bg-blue-dark hover:text-white mr-4">
                        Our Services
                    </router-link>
                    <router-link to="/contact"
                                 class="rounded-full border border-blue-dark bg-blue-dark text-white uppercase text-sm px-8 py-4 no-underline hover:bg-blue-darker">
                        Contact Us
                    </router-link>
                </div>
                <div class="w-1/2">
                    <img src="images/programming.jpg" alt="" class="h-64">
                </div>
            </div>

            <div class="flex flex-row-reverse">
                <div class="w-1/2 p-10">
                    <h2 class="text-3xl text-grey-darker">Who We Are</h2>
                    <p class="text-lg leading-normal">
                        We have been in in the web development and IT industry for 15 years. We have a wide range of knowledge of leading industry trends and can help you with your web and IT needs.
                    </p>
                </div>
                <div class="w-1/2">
                    <img src="images/programming.jpg" alt="">
                </div>
            </div>


        </section>

    </div>

</template>

<script>
    export default {
        name: "About",
        data() {
            return {}
        }
    }
</script>
