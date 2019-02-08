@extends('frontend.layouts.app')

@section('content')

    <div class="bg-white lg:py-10 xs:pb-4 px-2">
        <div class="container mx-auto l">
            <h2 class="text-2xl tracking-wide mont text-grey-darker">{{$blog->title}}</h2>
            <div class="mt-3 leading-normal text-grey-darker">
                {!! $blog->toHtml() !!}
            </div>

        </div>
    </div>



@endsection