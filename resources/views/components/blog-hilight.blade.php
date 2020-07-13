<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <div class="flex-shrink-0">
        <img class="h-48 w-full object-cover" src="{{$blog->image}}" alt="{{$blog->title}}" />
    </div>
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <p class="text-sm leading-5 font-medium text-indigo-600">
                <a href="#" class="hover:underline">
                    {{$blog->category->name}}
                </a>
            </p>
            <a href="{{route('blog.show', $blog->slug)}}" class="block">
                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                    {{$blog->blogTitle()}}
                </h3>
                <p class="mt-3 text-base leading-6 text-gray-500">
                    {{$blog->preview()}}
                </p>
            </a>
        </div>
        <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
                <a href="#">
                    <img class="h-10 w-10 rounded-full"
                         src="{{Gravatar::get($blog->user->email)}}"
                         alt="{{$blog->user->name}}'s Avatar" />
                </a>
            </div>
            <div class="ml-3">
                <p class="text-sm leading-5 font-medium text-gray-900">
                    <a href="#" class="hover:underline">
                        {{$blog->user->name}}
                    </a>
                </p>
                <div class="flex text-sm leading-5 text-gray-500">
                    <time datetime="2020-03-16">
                        {{$blog->created_at->format('M j, Y')}}
                    </time>
                    <span class="mx-1">
                        &middot;
                    </span>
                    <span>
                        {{$blog->minutesToRead()}} min read
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div>--}}
{{--    <div>--}}
{{--        <a href="blog?c={{$blog->category->slug}}" class="inline-block">--}}
{{--            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 category-{{$blog->category->name}}">--}}
{{--                {{$blog->category->name}}--}}
{{--            </span>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <a href="{{route('blog.show', $blog->slug)}}" class="block">--}}
{{--        <h3 class="mt-4 text-xl leading-7 font-semibold text-gray-900">--}}
{{--            {{$blog->blogTitle()}}--}}
{{--        </h3>--}}
{{--        <p class="mt-3 text-base leading-6 text-gray-500">--}}
{{--            {!! $blog->preview()!!}--}}
{{--        </p>--}}
{{--    </a>--}}
{{--    <div class="mt-6 flex items-center">--}}
{{--        <div class="flex-shrink-0">--}}
{{--            <a href="#">--}}
{{--                <img class="h-10 w-10 rounded-full"--}}
{{--                     src="{{Gravatar::get($blog->user->email)}}"--}}
{{--                     alt=""/>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="ml-3">--}}
{{--            <p class="text-sm leading-5 font-medium text-gray-900">--}}
{{--                <a href="#">--}}
{{--                    {{$blog->user->name}}--}}
{{--                </a>--}}
{{--            </p>--}}
{{--            <div class="flex text-sm leading-5 text-gray-500">--}}
{{--                <time datetime="2020-03-16">--}}
{{--                    {{$blog->created_at->format('M j, Y')}}--}}
{{--                </time>--}}
{{--                <span class="mx-1">--}}
{{--                    &middot;--}}
{{--                </span>--}}
{{--                <span>--}}
{{--                    {{$blog->minutesToRead()}} min read--}}
{{--                </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
