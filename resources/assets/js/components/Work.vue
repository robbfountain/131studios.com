<template>
    <section class="py-8 px-2">
        <div class="filters-button-group text-center border-b pb-6 mb-8">
            <button class="border rounded-full bg-transparent border-transparent text-grey-darkest hover:bg-blue-darkest hover:text-white hover:border-blue-darkest uppercase text-xs px-4 py-2 font-medium mr-3" data-filter="*">all</button>
            <button class="border rounded-full bg-transparent border-transparent text-grey-darkest hover:bg-blue-darkest hover:text-white hover:border-blue-darkest uppercase text-xs px-4 py-2 font-medium mr-3" data-filter="web-development">Web Development</button>
            <button class="border rounded-full bg-transparent border-transparent text-grey-darkest hover:bg-blue-darkest hover:text-white hover:border-blue-darkest uppercase text-xs px-4 py-2 font-medium mr-3" data-filter="application-development">Application Development</button>
            <button class="border rounded-full bg-transparent border-transparent text-grey-darkest hover:bg-blue-darkest hover:text-white hover:border-blue-darkest uppercase text-xs px-4 py-2 font-medium mr-3" data-filter="other">Other</button>

        </div>

        <div class="container mx-auto">
            <div class="text-center">
                <h2 class="title font-medium text-3xl my-4">Our Work</h2>
            </div>
            <div class="grid">
                <div v-for="(project, index) in projects" :key="project.id" class="grid-item max-w-xs flex flex-col" :class="project.category.slug">
                    <img :src="project.primary_image" >
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

</template>

<script>
    export default {
        data() {
            return {
                projects: {},
                categories: {},
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
                        this.categories = data.categories
                    })
            }
        }
    }
</script>
