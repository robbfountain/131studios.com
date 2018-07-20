<template>
    <div class="page">
        <div class="banner bg-blue-darker text-center xs:px-2 xs:py-2 lg:py-12">
            <h1 class="text-white text-5xl mt-6 mb-1 font-light">Our Work</h1>
        </div>
        <section class="py-8 px-2">
            <div class="container mx-auto">
                <div class="text-center">
                    <h2 class="title font-medium text-3xl my-4">Our Work</h2>
                </div>
                <div class="grid text-center">
                    <div v-for="(project, index) in projects" :key="project.id"
                         class="grid-item max-w-sm flex flex-col">
                        <img :src="project.primary_image">
                        <div class="bg-blue-darker p-4 text-center text-4xl text-white">
                            {{project.title}}
                        </div>
                    </div>
                    <!-- Project -->
                    <!--<div v-for="(project, index) in projects" :key="project.id"-->
                    <!--class="grid-item shadow-lg rounded overflow-hidden xs:mb-4 lg:mr-1 w-1/4"-->
                    <!--:class="project.category.name">-->
                    <!--<img :src="project.primary_image" alt="" class="">-->
                    <!--<div class="px-6 py-4">-->
                    <!--<div class="font-bold text-xl mb-2">{{project.title}}</div>-->
                    <!--<p class="text-grey-darker">{{project.description}}-->
                    <!--</p>-->
                    <!--</div>-->
                    <!--<div class="px-6 py-4">-->
                    <!--<span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">{{project.category.name}}</span>-->
                    <!--</div>-->
                    <!--</div>-->
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
        mounted() {
            this.fetch();
        },
        methods: {
            fetch() {
                axios.get('/projects')
                    .then(({data}) => {
                        this.projects = data.data;
                    })
            }
        }
    }
</script>
