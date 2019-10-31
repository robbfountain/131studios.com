<div class="xs:w-full lg:w-1/4 p-3">
    <div class="min-h-full max-h-full max-w-sm rounded overflow-hidden shadow-lg {{!$blog->is_published || $blog->published_at > now() ? 'border-2 border-orange-400 bg-orange-100' : ''}}">
        <div class="h-64 shadow bg-cover" style="background-image: url({{$blog->imageUrl()}});"></div>

        <div class="flex-1 flex flex-col p-3">

            <div class="font-semibold text-xl mb-2 leading-tight mt-2">
                <a class="text-gray-700 hover:underline" href="{{route('blog.show',$blog->slug)}}">{{$blog->title}}</a>
            </div>

            <p class="text-gray-600 flex-1 mt-2">
                {!! $blog->preview()!!}
            </p>

            <div class="flex items-center mt-3">
                <img src="{{$blog->user->avatar()}}" class="h-8 w-8 p-1 rounded-full shadow" alt="{{$blog->user->name}}'s Avatar">
                <div class="flex flex-col">
                    <div class="ml-2 text-gray-600 text-xs font-semibold tracking-wide">{{$blog->user->name}}</div>
                    <div class="ml-2 text-xs text-gray-600 -mt-1">
                        {{$blog->published_at->format('M d, Y')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

