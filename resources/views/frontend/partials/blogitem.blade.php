<div class="xs:w-full lg:w-1/3 p-2">
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img src="{{$blog->imageUrl()}}" alt="{{$blog->title}}">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">
                <a class="text-grey-darkest no-underline hover:underline" href="{{route('blog.show',$blog->slug)}}">{{$blog->title}}</a>
            </div>
            <div class="py-3 flex items-center">
                <img src="{{$blog->user->avatar()}}" class="h-6 w-6 rounded-ful" alt="{{$blog->user->name}}'s Avatar">
                <div class="ml-2 text-xs text-grey-darker">
                    Posted {{$blog->created_at->format('M d, Y')}}
                </div>
            </div>
            <p class="text-grey-dark text-base py-2">
                {!! $blog->preview()!!}
            </p>
        </div>
    </div>
</div>

