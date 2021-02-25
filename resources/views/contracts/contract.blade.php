@extends('frontend.layouts.app')

@section('content')
    <x-banner :condensed="true"/>

    <div>
        <div class="mx-auto w-2/3 flex justify-end px-6 mt-6">
            @if(!$contract->is_approved)
                <a href="#signature_pad"
                   class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Approve &amp; Sign
                </a>
            @else
                <a href="{{route('contract.pdf',$contract->id)}}"
                   class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Download PDF
                </a>
            @endif

        </div>

        @livewire('contract',['contract' => $contract])
    </div>
@endsection
