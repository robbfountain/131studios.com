<div class="mb-12 category category-{{$blog->category->name}} {{!$blog->is_published || $blog->published_at > now() ? 'bg-orange-100 bg-opacity-50' : ''}}">

    <h1 class="text-4xl leading-none mb-4 ">
        <a class="text-gray-800 text-4xl hover:text-gray-700 transition ease-in-out duration-150"
           href="{{$blog->getLinkToFullPost()}}">{{$blog->blogTitle()}}</a>
    </h1>

    @if(!$blog->isProject())
        <h6 class="text-gray-700 text-lg mb-2">
            {{$blog->category->name}}
            - {{$blog->published_at->format('M d, Y')}} {{ $blog->reference_url ? ' - ' . $blog->referenceUrl() : '' }}
        </h6>
    @endif

    <p class="text-gray-600 leading-normal text-xl mb-6 mt-3">
        {!! $blog->preview()!!}
    </p>

    @if(!$blog->isProject())
        <div class="mt-6">
            <a class="text-lg border-b-4 text-indigo-500 hover:border-indigo-500 hover:text-indigo-600 transition ease-in-out duration-150"
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
    @endif
</div>

