<div class="mb-8">

    <div class="category category-{{$blog->category->name}} {{!$blog->is_published || $blog->published_at > now() ? 'bg-orange-100 bg-opacity-50' : ''}}"></div>

    <div class="mb-4">
        <a class="text-3xl leading-none text-gray-800 hover:text-gray-700 tracking-tight font-bold transition ease-in-out duration-150"
           href="{{$blog->getLinkToFullPost()}}">{{$blog->blogTitle()}}</a>
    </div>

    @if(!$blog->isProject())
        <h6 class="flex text-gray-700 text-lg mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <span>
                {{$blog->published_at->format('M d, Y')}}
            </span>

            @if($blog->isOriginal())
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4 mr-2" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>
                    {{$blog->minutesToRead() . __(' minute read') }}
                </span>
            @endif
        </h6>
    @endif

    <div class="prose prose-lg">
        {!! $blog->getPreview()!!}
    </div>

    <div class="mt-6">
        <a class="text-lg border-b-4 text-blue-500 hover:border-blue-500 hover:text-blue-600 transition ease-in-out duration-150"
           href="{{$blog->getLinkToFullPost()}}">
            Read More
        </a>
        @if($blog->reference_url)
            <span class="ml-2 text-gray-500">
                [<a class="text-gray-500 hover:text-gray-700 mx-1"
                    href="{{$blog->reference_url}}">{{$blog->referenceUrl()}}</a>]
            </span>
        @endif
        @if($blog->tweet)
            <span class="ml-2 text-gray-500">
                [<a class="text-gray-500 hover:text-gray-700 mx-1"
                    href="{{$blog->getLinkToFullPost()}}">Twitter</a>]
            </span>
        @endif
    </div>

</div>

