<div class="{{$isColumn ? 'blog-container-column' : 'blog-container-row'}} category category-{{$blog->category->name}} {{!$blog->is_published || $blog->published_at > now() ? 'bg-orange-100' : ''}}">
    @if($isColumn)
        <h1>
            <a href="{{route('blog.show',$blog->slug)}}">{{$blog->blogTitle()}}</a>
        </h1>
    @else
        <h2>
            <a href="{{route('blog.show',$blog->slug)}}">{{$blog->blogTitle()}}</a>
        </h2>
    @endif

    @if(!$blog->isProject())
        <h6>
            {{$blog->category->name}}
            - {{$blog->published_at->format('M d, Y')}} {{ $blog->reference_url ? ' - ' . $blog->referenceUrl() : '' }}
        </h6>
    @endif

    @if($blog->isProject() && $blog->hasImage())
        <div class="py-2">
            <a href="{{$blog->url}}" target="_blank">
                <img src="{{$blog->imageUrl(['crop' => 'fill', 'width' => 960, 'height' => 240])}}"
                     alt="{{$blog->blogTitle()}}" class="blog-main-image">
            </a>
        </div>
    @endif

    <p>
        {!! $blog->preview()!!}
    </p>

    @if(!$blog->isProject())
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
    @endif
</div>

