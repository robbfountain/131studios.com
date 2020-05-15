<div class="{{$isColumn ? 'blog-container-column' : 'blog-container-row'}} category category-{{$blog->category->name}} {{!$blog->is_published || $blog->published_at > now() ? 'bg-orange-100' : ''}}">
    @if($isColumn)
        <h1>
            <a href="{{route('blog.show',$blog->slug)}}">{{$blog->title()}}</a>
        </h1>
    @else
        <h2>
            <a href="{{route('blog.show',$blog->slug)}}">{{$blog->title()}}</a>
        </h2>
    @endif

    <h6>
        {{$blog->category->name}}
        - {{$blog->published_at->format('M d, Y')}} {{ $blog->reference_url ? ' - ' . $blog->referenceUrl() : '' }}
    </h6>

    <p>
        {!! $blog->preview()!!}
    </p>

    <div class="mt-6">
        <a class="more" href="{{$blog->getLinkToFullPost()}}">
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

