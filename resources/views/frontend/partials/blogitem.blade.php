<article class="w-1/4 mr-3 border rounded shadow bg-grey-lightest">
    <h4 class="p-2 text-center font-semibold text-lg tracking-loose text-blue">
        {{$blog->title}}
    </h4>
    <div class="my-3">
        <img src="{{$blog->image}}" alt="{{$blog->title}}">
    </div>
    <div class="text-center mt-6 mb-4">
        <a class="rounded border text-blue tracking-loose px-4 py-2 border-blue no-underline" href="blog/{{$blog->slug}}">Read More</a>
    </div>
</article>