@extends('sphene.partials.layout')

@section('header')
	@include('sphene.partials.header-sub')
@stop

@section('meta-csrf')
	<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
	<div class="container">
	<div class="row sticky-wrapper margin-top-50">

			<!-- Photos -->
			<div class="col-md-8">
				<div class="project-photos">
					<a href="/images/single-project-01b.jpg"  title="This is a photo title" class="mfp-gallery img-hover"><img src="/images/single-project-01b.jpg" alt=""></a>
					<a href="/images/single-project-01a.jpg"  title="Another title here" class="mfp-gallery img-hover"><img src="/images/single-project-01a.jpg" alt=""></a>
					<a href="/images/single-project-01.jpg"  title="and another" class="mfp-gallery img-hover"><img src="/images/single-project-01.jpg" alt=""></a>
				</div>
			</div>

			<!-- Content -->
			<div class="col-md-4">
				<div class="project-details right-side sticky">
					<h4 class="headline">Project Description</h4>
					<p>{!!$project->description!!}</p>

					<ul class="details">
						<li><span>Date:</span> 11 January 2016</li>
						<li><span>Location:</span> London</li>
						<li><span>Category:</span> {{$project->sub_title}}</li>
					</ul>

					{{-- <a href="#" class="button fw medium border margin-top-15">Launch Project</a> --}}

				</div>
			</div>

	</div>
</div>
@stop