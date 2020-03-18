@extends('frontend.layouts.app')

@section('content')
    @banner
    <div class="container mx-auto text-center">
        <h1 class="px-3 py-3 mb-8 inline-block text-center text-gray-500 font-normal tracking-wide text-4xl mt-6 mb-1"
            style="background-color: rgba(0,0,0,0.5)">
            {{ isset($heading) ? $heading : 'Our Blog' }}
        </h1>
    </div>
    @endbanner

    <section class="bg-white lg:py-10 xs:pb-4 px-2">
        <div class="container mx-auto flex">
            <div class="w-1/5 border-r px-6">
                @include('frontend.blog.partials._categories')
            </div>

            <div class="flex flex-col pl-10 flex-1">
                <h2 class="text-3xl font-semibold text-gray-800">{{$heading}}</h2>
                <blog-search inline-template>
                    <ais-instant-search
                            index-name="{{env('SCOUT_PREFIX')}}blogs"
                            :search-client="searchClient">

                        <ais-search-box>
                            <div slot-scope="{ currentRefinement, isSearchStalled, refine }">
                                <input type="search"
                                       v-model="currentRefinement"
                                       @input="refine($event.currentTarget.value)"
                                       class="border-gray-200 font-semibold text-lg text-gray-500 border-b-4 w-full p-2 bg-gray-100">
                            </div>
                        </ais-search-box>

                        <ais-hits>
                            <div slot-scope="{ items }" class="mt-6">
                                <div v-for="blog in items"
                                     :key="blog.objectID"
                                     class="py-4">
                                    <h1 class="text-2xl">
                                        <a :href="blog.link_to_full_post">@{{blog.title}}</a>
                                    </h1>

                                    <h6 class="text-base text-gray-500">
                                        @{{blog.category}}
                                        - @{{blog.published_for_humans}} @{{ blog.reference_url ? ' - ' . blog.link_to_full_post : '' }}
                                    </h6>
                                </div>
                            </div>
                        </ais-hits>

                        <ais-pagination />
                    </ais-instant-search>
                </blog-search>
            </div>
        </div>
    </section>
@endsection
