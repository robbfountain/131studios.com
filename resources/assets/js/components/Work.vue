<template>

    <section class="py-8 px-2">
        <div class="container mx-auto">
            <div class="text-center">
                <h2 class="title font-medium text-3xl my-4">Our Work</h2>
            </div>

            <div class="text-center flex flex-wrap grid">
                <isotope ref="cpt" :options="options" v-images-loaded:on.progress="layout" :list="objToArray()">
                    <div v-for="project in projects" :key="project.id"
                         class=" w-1/3 flex flex-col item">
                        <!--<img :src="project.primary_image" alt="Not Found">-->
                        <div class="bg-blue-darker p-2 text-center text-xl text-white">
                            {{project.title}}
                        </div>
                    </div>
                </isotope>
            </div>
        </div>
    </section>
</template>

<script>
    import isotope from 'vueisotope';

    export default {
        components: {isotope},
        data() {
            return {
                projects: {},
                options: {
                    itemSelector: '.grid-item',
                    getSortData: {
                        name: '.name',
                        category: '[data-category]'
                    },
                    masonry: {
                        columnWidth: 200
                    }
                }
            }
        },
        mounted() {
            this.fetch();
        },

        methods: {
            layout() {
                this.$refs.cpt.layout('masonry');
            },
            fetch() {
                axios.get('/projects')
                    .then(({data}) => {
                        this.projects = data.data;
                    })
            },
            objToArray() {
                var obj = this.projects;
                return Object.keys(obj).map(function (key) {
                    return obj[key];
                });
            }
        }
    }
</script>
