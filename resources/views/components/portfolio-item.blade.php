<div class="flex flex-col rounded-md overflow-hidden">
    <div class="flex-shrink-0 border">
        <img class="h-64 w-full object-cover"
             src="{{\Illuminate\Support\Facades\Storage::disk('s3')->temporaryUrl($project->preview_image, now()->addMinutes(10))}}"
             alt="{{$project->title}}"/>
    </div>
    <div class="mt-2">
        <h2 class="font-semibold text-lg text-gray-600">{{$project->title}}</h2>
    </div>
    <div class="mt-4 inline-flex">
        <a href="{{route('project.show',['year' => $project->published->format('Y'),'month'=>$project->published->format('m'),'slug'=> $project->slug])}}"
           class="text-sm text-blue-500 hover:text-blue-700 transition duration-100 ease-in-out">
            More Info
        </a>
    </div>
    {{--    <div class="flex-1 bg-white p-6 flex flex-col justify-between">--}}
    {{--        <div class="flex-1">--}}
    {{--            <p class="text-sm leading-5 font-medium text-blue-600">--}}
    {{--                <span>--}}
    {{--                    Project--}}
    {{--                </span>--}}
    {{--            </p>--}}
    {{--            <span class="block">--}}
    {{--                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">--}}
    {{--                    {{$project->title}}--}}
    {{--                </h3>--}}
    {{--                <p class="mt-3 text-base leading-6 text-gray-500">--}}
    {{--                    {!! $project->getPreview() !!}--}}
    {{--                </p>--}}
    {{--            </span>--}}
    {{--            <div class="mt-6">--}}
    {{--                <a href="{{$project->url}}"--}}
    {{--                   class="text-sm text-blue-500 hover:text-blue-700 transition duration-100 ease-in-out"--}}
    {{--                   target="_blank">--}}
    {{--                    Visit {{$project->blogTitleToProjectTitle()}} <i class="far fa-external-link"></i>--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</div>
