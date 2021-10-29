@extends('layouts.app')

@section('content')
    <x-banner>
        SEO <span class="text-blue-500">Assessment</span>
        <x-slot name="subtitle">Please take a few minutes to answer some questions so we can better understand how your business works. </x-slot>
    </x-banner>

    <section class="py-12 bg-white max-w-screen-xl mx-auto">
        <h2 class="text-2xl tracking-tight leading-10 font-bold text-gray-900 sm:leading-none">
        About this Assessment</h2>
        <p class="text-lg text-gray-600 mt-4 leading-none">The questions below will help us understand how your business functions on the internet and what steps we can take to improve your overall search ranking</p>
        <p class="text-lg text-gray-600 mt-4 leading-none">Most questions are optional but we highly recommend you take the time to answer them in detail.  The more details you provide, the better we are able to help.</p>
        <p class="text-lg text-gray-600 mt-4 leading-none">The form should only take about <span class="font-bold">20 - 30 minutes</span> to complete and your answers will only help improve your search engine ranking</p>
        <p class="text-lg text-gray-600 mt-4 leading-none">Your progress will be saved automatically as you go and you can come back and finish at any time.  When you are done submit the form and we will get back to you.</p>
    </section>

    <livewire:seo-assessment />

@endsection
