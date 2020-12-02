<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <div class="flex-shrink-0">
        <img class="h-48 w-full object-cover" src="{{$project->imageUrl()}}" alt="{{$project->title}}" />
    </div>
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <p class="text-sm leading-5 font-medium text-blue-600">
                <a href="#" class="hover:underline">
                    Project
                </a>
            </p>
            <a href="#" class="block">
                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                    {{$project->title}}
                </h3>
                <p class="mt-3 text-base leading-6 text-gray-500">
                    {!! $project->getPreview() !!}
                </p>
            </a>
        </div>
    </div>
</div>
