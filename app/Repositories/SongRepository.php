<?php

namespace App\Repositories;

use App\Models\Song;

class SongRepository {

	/**
	 * Get all songs
	 *
	 * @return Songs
	 */
	public function getAllSongs()
	{
		$songs = Song::all();

		return $songs;
	}

	/**
	 * Store song request
	 * 
	 * @param Array $data
	 *
	 * @return Song
	 */
	public function store(array $data): Song
	{
		try {
			$song = Song::create([
				'title' => $data['title'],
				'author' => $data['author'],
				'lyrics' => nl2br($data['lyrics'])
			]);

			if ($song) {
				return $song;
			}
		} catch (Exception $e) {
			return $e;
		}
	}

	/**
	 * Update song request
	 * 
	 * @param Array $data
	 *
	 * @return Song
	 */
	public function update($song, array $data)
	{
		try {
			if ($song->update([
				'title' => $data['title'],
				'author' => $data['author'],
				'lyrics' => nl2br($data['lyrics'])
			])) {
				return $song;
			}
		} catch (Exception $e) {
			return $e;
		}
	}

}