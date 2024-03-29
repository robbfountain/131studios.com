<li class="mt-10 md:mt-0">
    <div class="flex">
        <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                {{$icon}}
            </div>
        </div>
        <div class="ml-4">
            <div class="flex justify-between items-center">
                <h4 class="text-lg leading-6 font-medium text-gray-900">{{$title}}</h4>
            </div>

            <p class="mt-2 text-base leading-6 text-gray-500">
                {{$slot}}
            </p>
        </div>
    </div>
</li>
