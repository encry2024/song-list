@extends('backend.layout.app')

@section('content')
<h1 class="mt-4">Song List
<a href="{{ route('song.create') }}" class="btn btn-success float-right">Add Song</a></h1>
<hr>

<div class="row">
	<div class="col-lg-12">
		<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Date Created</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        	@foreach ($songs as $song)
        	<tr>
        		<td>{{ $song->title }}</td>
        		<td>{{ $song->author }}</td>
        		<td>{{ date("F d, Y", strtotime($song->created_at)) }}</td>
        		<td>
        			<a href="{{ route('song.show', ['song' => $song->id]) }}" class="btn btn-secondary">View Song</a>
                    <a href="{{ route('song.edit', ['song' => $song->id]) }}" class="btn btn-primary">Edit Song</a>
                    <a href="#" class="btn btn-danger delete-button" data-toggle="modal" data-target="#deleteSongModal" 
                    data-song-id="{{ $song->id }}">Delete Song</a>
        		</td>
        	</tr>
        	@endforeach
        </tbody>
    </table>
	</div>
</div>

<form class="modal fade" tabindex="-1" role="dialog" id="deleteSongModal" action="{{ route('song.destroy', ['song' => ':song']) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Song</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this song?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</form><!-- /.modal -->
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
        $("#deleteSongModal").on('hidden.bs.modal', function () {
            var deleteForm = $("#deleteSongModal");
            deleteForm.attr('action', '{{ route("song.destroy", ":song") }}');
        });

	    $(".delete-button").click(function () {
            var songId = $(this).data('song-id');
            var deleteForm = $("#deleteSongModal");
            var deleteUrl = deleteForm.attr('action');
            deleteUrl = deleteUrl.replace(":song", songId);

            deleteForm.attr('action', deleteUrl);
        });
	});
</script>
@endsection