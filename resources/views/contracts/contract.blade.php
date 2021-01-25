@extends('frontend.layouts.app')

@section('content')
    <x-banner :condensed="true">

    </x-banner>

    <div x-data="{isOpen : false}">
        <div class="mx-auto w-2/3 flex justify-end px-6 mt-6">
            <button @click="isOpen = true"
                    type="button"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Approve
            </button>
        </div>

        @include('contracts.contract-stub')
        @include('contracts.modals.approve-modal')
    </div>
@endsection
