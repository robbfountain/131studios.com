@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
          content="Web Design, Social Media, Hosting and SEO for Greencastle, Chambersburg and Hagerstown.  Get your FREE SEO Checkup Today."/>
@endsection

@section('content')

    <x-banner>
        Our<x-slot name="titleExpanded">Services</x-slot>
    </x-banner>

@endsection
