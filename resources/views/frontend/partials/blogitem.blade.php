<div class="xs:w-full lg:w-1/3 p-2">
    <div class="max-w-sm rounded overflow-hidden shadow-lg {{!$blog->is_published || $blog->published_at > now() ? 'border-2 border-orange-400 bg-orange-100' : ''}}">
        <a href="{{route('blog.show',$blog->slug)}}">
            <img src="{{$blog->imageUrl()}}" alt="{{$blog->title}}">
        </a>

        <div class="px-6 py-4">
            <div class="font-semibold text-xl mb-2">
                <a class="text-gray-700 hover:underline" href="{{route('blog.show',$blog->slug)}}">{{$blog->title}}</a>
            </div>
            <p class="text-gray-600 py-2">
                {!! $blog->preview()!!}
            </p>
            <div class="py-3 flex items-center">
                <img src="{{$blog->user->avatar()}}" class="h-6 w-6 rounded-ful" alt="{{$blog->user->name}}'s Avatar">
                <div class="flex flex-col">
                    <div class="ml-2 text-gray-600 text-xs font-semibold">{{$blog->user->name}}</div>
                    <div class="ml-2 text-xs text-gray-600 -mt-1">
                        {{$blog->published_at->format('M d, Y')}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

