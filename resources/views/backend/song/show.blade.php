@extends('backend.layout.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="row mt-5">
			<div class="col-lg-12">
				<h1 class="text-center">{{ $song->title }}</h1>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-12">
				<h6 class="text-center">Author: {{ $song->author }}</h6>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-12">
				<p class="text-center">{!! $song->lyrics !!}</p>
			</div>
		</div>
	</div>
</div>
@endsection