<section class="relative bg-gray-50 overflow-hidden">
    <div class="max-w-screen-xl mx-auto">
        <div class="relative z-10 pb-8 bg-gray-50 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-gray-50 transform translate-x-1/2"
                 fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100"/>
            </svg>
            <div class="relative pt-2 px-4 sm:px-6 lg:px-8">
                <div class="prose prose-blue text-base text-gray-500 px-4 mt-10">
                   {{$slot}}
                </div>
            </div>
        </div>
    </div>
    <div class="lg:absolute shadow-lg lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{$image ?? ''}}"
             alt="{{$service}}">
    </div>
</section>
