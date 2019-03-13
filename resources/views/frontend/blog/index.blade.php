@extends('frontend.layouts.app')

@section('content')
    <div>
        <div class="bg-white lg:py-10 xs:pb-4 px-2">
            <div class="container mx-auto flex flex-col">
                <h2 class="mb-4">Recent Blog Entries</h2>
                @foreach($blogs as $blog)
                    <div class="flex flex-col py-4 border-b">
                        <div class="mb-2">
                            <a href="{{route('blog.show',$blog->slug)}}"
                               class="tracking-wide text-lg text-grey-darker no-underline hover:text-blue-darker">
                                {{$blog->title}}
                            </a>
                        </div>
                        <div class="text-grey-dark text-sm">
                            {{$blog->published_at->format('F d, Y')}}
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection