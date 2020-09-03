<?php

namespace App\Http\Controllers;

use App\Repositories\SongRepository;

class DashboardController extends Controller {

	protected $songRepository;

	public function __construct(SongRepository $songRepository)
	{
		$this->songRepository = $songRepository;
	}

	public function index()
	{
		return view('backend.dashboard')->withSongs($this->songRepository->getAllSongs());
	}

}