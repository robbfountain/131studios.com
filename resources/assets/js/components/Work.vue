<template>
    <section class="py-8 px-2">
        <div class="filters-button-group text-center border-b pb-6 mb-8">
            <button class="border rounded-full bg-blue-darker text-white mr-6 px-4 py-2" data-filter="*">all</button>
            <button class="border rounded-full bg-blue-darker text-white mr-6 px-4 py-2" data-filter=".sint">sint</button>
            <button class="border rounded-full bg-blue-darker text-white mr-6 px-4 py-2" data-filter=".odit">odit</button>
            <button class="border rounded-full bg-blue-darker text-white mr-6 px-4 py-2" data-filter=".pleb">pleb</button>
        </div>

        <div class="container mx-auto">
            <div class="text-center">
                <h2 class="title font-medium text-3xl my-4">Our Work</h2>
            </div>
            <div class="text-center grid">
                    <img v-for="(project, index) in projects" :key="project.id" class="grid-item max-w-xs" :src="project.primary_image" :class="project.category.name">
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
                projects: {}
            }
        },
        mounted() {
            this.fetch();

            var $grid = $('.grid');
            $grid.imagesLoaded(function () {
                $grid.isotope({
                    itemSelector: ".grid-item",
                    masonry: {
                        columnWidth: 100
                    }
                });
            });

            $('.filters-button-group').on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                // use filterFn if matches value
                $grid.isotope({filter: filterValue});
            });
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
