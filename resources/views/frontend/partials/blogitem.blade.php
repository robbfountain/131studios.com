<article class="w-1/4 mr-6 border rounded bg-transparent">
    <h4 class="p-3 text-center font-semibold text-base tracking-loose text-blue">
        {{$blog->title}}
    </h4>
    <div class="my-3">
        @if($blog->image)
            <img src="{{$blog->image}}" alt="{{$blog->title}}">
        @endif
    </div>
    <div class="text-center mt-6 mb-4">
        <a class="rounded border text-blue text-sm tracking-loose px-4 py-2 border-blue no-underline hover:bg-blue hover:text-white hover:border-transparent"
           href="blog/{{$blog->slug}}">Read More</a>
    </div>
</article>