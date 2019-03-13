@extends('frontend.layouts.app')

@section('content')
    <div class="bg-white lg:py-10 xs:pb-4 px-2 mont">
        <div class="container mx-auto">
            <h1 class="text-3xl tracking-wide mont text-grey-darker">{{$blog->title}}</h1>
            <div class="mt-3 text-grey text-sm">
                {{$blog->published_at->format('F d, Y')}}
                <span class="ml-4 border rounded-full px-4 py-0 border-blue text-blue hover:border-blue-light hover:text-blue-light">
                    {{strtolower($blog->category->name)}}
                </span>
            </div>
            <div class="mt-3 leading-normal text-grey-darker">
                {!! $blog->toHtml() !!}
            </div>

        </div>
    </div>
@endsection