@extends('backend.layout.app')

@section('content')
<h1 class="mt-4">Update {{ $song->title }}
<a href="{{ route('song.index') }}" class="btn btn-success float-right">Back to list</a>
</h1>
<hr>

<div class="row">
	<div class="col-lg-12">
		<form class="form-horizontal" action="{{ route('song.update', ['song' => $song->id]) }}" method="POST">
			{{ csrf_field() }}
			{{ method_field('PATCH') }}

			<div class="form-group">
				<label for="title" class="col-sm-2 control-label">Title</label>

				<div class="col-sm-10">
					<input name="title" type="title" class="form-control" id="title" placeholder="Song Title" value="{{ $song->title }}">
				</div>
			</div>

			<div class="form-group">
				<label for="author" class="col-sm-2 control-label">Author</label>
				<div class="col-sm-10">
					<input name="author" type="string" class="form-control" id="author" placeholder="Author" value="{{ $song->author }}">
				</div>
			</div>

			<div class="form-group">
				<label for="lryics" class="col-sm-2 control-label">Lyrics</label>
				<div class="col-sm-10">
					<textarea name="lyrics" type="string" class="form-control" id="lryics" placeholder="Lyrics" style="height: 200px">{{ str_replace('<br />', '', $song->lyrics) }}</textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Update Song</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection