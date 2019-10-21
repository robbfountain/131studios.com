<template>
    <div class="page">

        <div class="banner bg-blue-darker text-center xs:px-2 xs:py-2 lg:py-12">
            <img src="/images/logo-hero.png" alt="">
            <h1 class="text-white text-5xl mt-6 mb-1 font-light">131 Studios</h1>
            <h2 class="text-white text-xg font-light">Web Development, Web Design and Consulting</h2>
        </div>


        <section class="bg-white py-12 px-2">
            <div class="container mx-auto flex justify-between xs:flex-col lg:flex-row ">
                <!-- Service Box -->
                <div class="group mr-4 flex xs:mb-4">
                    <div class="mr-3">
                        <div class="transition group-hover:bg-blue-darker group-hover:text-white rounded-full border bg-gray-300er p-6 text-center text-2xl">
                            <fa icon="code"></fa>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-xl font-medium">Web Development</h3>
                        <p class="leading-normal">Custom backend development, Content Management Systems, Online
                            Contests, Custom Applications, Shopping Carts, Online Stores.</p>
                    </div>
                </div>

                <!-- Service Box -->
                <div class="group mr-4 flex xs:mb-4">
                    <div class="mr-3">
                        <div class="rounded-full border bg-gray-300er p-6 text-center text-2xl">
                            <fa icon="paint-brush"></fa>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-xl font-medium">Web Design</h3>
                        <p class="leading-normal">We offer services to completely redesign your current website or
                            create you a brand new website. </p>
                    </div>
                </div>

                <!-- Service Box -->
                <div class="group mr-4 flex xs:mb-4">
                    <div class="mr-3">
                        <div class="rounded-full border bg-gray-300er p-6 text-center text-2xl">
                            <fa icon="server"></fa>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-xl font-medium">Hosting</h3>
                        <p class="leading-normal">We offer powerful VPS hosting systems for your website and we take
                            care of everything from server maintenance to application deployment.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="border-t border-b border-blue-darker py-8 mt-8 bg-blue-dark">
            <div class="container mx-auto">
                <div class="flex justify-center items-center px-2 xs:flex-col lg:flex-row">
                    <h2 class="text-4xl font-medium text-white xs:text-center xs:mb-4 lg:mr-8">
                        Hire us for your next project
                    </h2>
                    <router-link to="/contact"
                                 class="border rounded-full border-white px-4 py-2 text-white no-underline text-xl hover:bg-white hover:text-blue-dark hover:border-transparent">
                        Contact Us
                    </router-link>
                </div>
            </div>
        </section>

        <section class="py-10 bg-gray-300est">
            <div class="container mx-auto">
                <div class="text-center">
                    <h2 class="title font-medium text-3xl mt-4 mb-8">Recent Work</h2>
                </div>

                <div class="owl-carousel owl-theme">
                        <!-- Project -->
                        <div v-for="(project, index) in projects" :key="project.id"
                             class="shadow-lg rounded overflow-hidden xs:mb-4 lg:mr-6">
                            <img :src="project.primary_image" alt="" class="">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">{{project.title}}</div>
                                <p class="text-gray-600er">{{project.description}}
                                </p>
                            </div>
                            <div class="px-6 py-4">
                                <span class="inline-block bg-gray-300er rounded-full px-3 py-1 text-sm font-semibold text-gray-600er mr-2">#photography</span>
                                <span class="inline-block bg-gray-300er rounded-full px-3 py-1 text-sm font-semibold text-gray-600er mr-2">#travel</span>
                                <span class="inline-block bg-gray-300er rounded-full px-3 py-1 text-sm font-semibold text-gray-600er">#winter</span>

                            </div>
                        </div>
                </div>
            </div>
        </section>

        <section class="border-t py-8 background-white">
            <div class="container mx-auto">
                <div class="text-center">
                    <h2 class="title font-medium text-3xl my-4">Platforms We Use</h2>
                </div>
                <div class="flex justify-between mt-8 xs:flex-col lg:flex-row">
                    <img src="/images/logos/laravel.png" alt="" class="h-12">
                    <img src="/images/logos/digital-ocean.png" alt="" class="h-12">
                    <img src="/images/logos/php.png" alt="" class="h-12">
                    <img src="/images/logos/forge.png" alt="" class="h-12">
                    <img src="/images/logos/vue.png" alt="" class="h-12">
                    <img src="/images/logos/jQuery-Logo.png" alt="" class="h-12">
                </div>
            </div>
        </section>
    </div>

</template>

<script>
    export default {

        data() {
            return {
                projects: {},
            }
        },

        created() {
            this.fetchProjects();
        },

        mounted() {
           $(document).ready(function() {
               $('.owl-carousel').owlCarousel({
                   items: 3,
                   loop: true,
                   margin: 10,
                   autoplay: true,
                   autoplayTimeout: 3000,
                   autoplayHoverPause: true,
                   nav: false
               });

               $('.owl-carousel').on('changed.owl.carousel', function(event) {
                   $('.owl-carousel').owlCarousel();
               })
           });
        },

        methods: {
            fetchProjects() {
                axios.get('/projects')
                    .then(({data}) => {
                        this.projects = data.data;
                    });
            },
        }
    }
</script>
