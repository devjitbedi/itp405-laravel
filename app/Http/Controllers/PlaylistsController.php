<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class PlaylistsController extends Controller
{
    //

    public function index($id = null) {

			$playlists = DB::table('playlists')->get();

			if($id) {

				$tracks = DB::table('tracks')
				->join('playlist_track', 'tracks.TrackId', '=', 'playlist_track.TrackId')
				->where('PlaylistId', '=', $id)
				->get();

			}

			else {

				$tracks = [];
			}


			return view('playlists.index', [

				'playlists' => $playlists,
				'tracks' => $tracks
				
			]);
	}

	public function create() {

		return view('playlists.create');
	}

	public function store(Request $request) {

		$input = $request->all();
		$validation = Validator::make($input, [

			'name' => 'required|min:5|unique:playlists,Name'

		]);

		if ($validation->fails()) {

			return redirect('/playlists/new')
			->withInput()
			->withErrors($validation);

		}

		DB::table('playlists')->insert([

			'Name' => $request->name

		]);

		return redirect('/playlists');
	}



}







