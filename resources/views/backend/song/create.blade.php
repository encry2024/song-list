@extends('backend.layout.app')

@section('content')
<div class="row">
	<h1 class="mt-4 col-sm-12 col-lg-12">Create Song
		<a href="{{ route('song.index') }}" class="btn btn-success float-right col-sm-12 mt-2 col-lg-1">Back to list</a>
	</h1>
</div>

<hr>

<div class="row">
	<div class="col-lg-12">
		<form class="form-horizontal" action="{{ route('song.store') }}" method="POST">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="title" class="col-sm-2 control-label">Title</label>

				<div class="col-sm-10">
					<input name="title" type="title" class="form-control" id="title" placeholder="Song Title">
				</div>
			</div>

			<div class="form-group">
				<label for="author" class="col-sm-2 control-label">Author</label>
				<div class="col-sm-10">
					<input name="author" type="string" class="form-control" id="author" placeholder="Author">
				</div>
			</div>

			<div class="form-group">
				<label for="lryics" class="col-sm-2 control-label">Lyrics</label>
				<div class="col-sm-10">
					<textarea name="lyrics" type="string" class="form-control" id="lryics" placeholder="Lyrics" style="height: 200px"></textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Create Song</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection