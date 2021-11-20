<div class="mb-8">

    {{--    <div class="category category-{{$blog->category->name}} {{!$blog->is_published || $blog->published_at > now() ? 'bg-orange-100 bg-opacity-50' : ''}}"></div>--}}

    <div class="mb-4">
        <a class="text-3xl leading-none text-gray-800 hover:text-gray-700 tracking-tight font-bold transition ease-in-out duration-150"
           href="{{route('blog.show', [
                'year' => $blog->published->format('Y'),
                'month' => $blog->published->format('m'),
                'slug' => $blog->slug
    ])}}">{{$blog->title}}</a>
    </div>

    <h6 class="flex text-gray-700 text-lg mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
        </svg>
        <span>
            {{$blog->published->format('M j, Y')}}
        </span>

        {{--            @if($blog->isOriginal())--}}
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4 mr-2" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        <span>
            {{$blog->minutesToRead() . __(' minute read') }}
        </span>
        {{--            @endif--}}
    </h6>

    <div class="prose prose-lg">
        {!! $blog->preview()!!}
    </div>

    @if($blog->preview())
        <div class="mt-6">
            <a class="text-lg border-b-4 text-blue-500 hover:border-blue-500 hover:text-blue-600 transition ease-in-out duration-150"
               href="{{route('blog.show', [
    'year' => $blog->published->format('Y'),
                'month' => $blog->published->format('m'),
                'slug' => $blog->slug])}}">
                Read More
            </a>
        </div>
    @endif

</div>

