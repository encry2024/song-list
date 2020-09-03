<?php

namespace App\Http\Controllers\Song;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Repositories\songRepository;

class SongController extends Controller
{
    protected $songRepository;

    public function __construct(SongRepository $songRepository)
    {
        $this->songRepository = $songRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.song.index')->withSongs($this->songRepository->getAllSongs());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.song.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $song = $this->songRepository->store($request->only(
            'title',
            'author',
            'lyrics'
        ));

        return redirect()->back()->withFlashSuccess("Song " . $song->title . " was successfully added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('backend.song.show')->withSong($song);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('backend.song.edit')->withSong($song);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $song = $this->songRepository->update($song, $request->only(
            'title',
            'author',
            'lyrics'
        ));

        return redirect()->back()->withFlashSuccess('Song ' . $song->title . ' was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $id)
    {
        $songTitle = $id->title;

        $id->delete();

        return redirect()->back()->withFlashSuccess('Song ' . $songTitle . ' was successfully deleted.');
    }
}
