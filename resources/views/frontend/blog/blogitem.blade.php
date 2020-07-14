<div class="blog-container-column category category-{{$blog->category->name}} {{!$blog->is_published || $blog->published_at > now() ? 'bg-orange-100' : ''}}">
    <h1>
        <a href="{{route('blog.show',$blog->slug)}}">{{$blog->title}}</a>
    </h1>

    <h6>
        {{$blog->category->name}}
        - {{$blog->published_at->format('M d, Y')}} {{ $blog->reference_url ? ' - ' . $blog->referenceUrl() : '' }} {{$blog->isOriginal() ? '- ' .  $blog->minutesToRead() . ' minute
                        read' : ''}}
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

