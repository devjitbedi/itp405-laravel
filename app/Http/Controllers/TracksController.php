<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class TracksController extends Controller {

	public function index(Request $request) {

			$query = DB::table('tracks')
			->select('tracks.Name as Track', 
				'genres.Name as Genre', 
				'albums.Title as Album', 
				'artists.Name as Artist', 
				'tracks.UnitPrice as Price')

			->join('genres', 'genres.GenreId', '=', 'tracks.GenreId')
			->join('albums', 'albums.AlbumId', '=', 'tracks.AlbumId')
			->join('artists', 'artists.ArtistId', '=', 'albums.ArtistId');

			if ($request->query('genre')) {
		      $query->where('Genre', '=', $request->query('genre'));
		    }


			$tracks = $query->get();


			return view('tracks.index', [

				'tracks' => $tracks,
				'genre' => $request->query('genre')
			]);
	}

	public function create() {

		$albums = DB::table('albums')->get();
		$mediatypes = DB::table('media_types')->get();
		$genres = DB::table('genres')->get();


		return view('tracks.create', [

				'albums' => $albums,
				'mediatypes' => $mediatypes,
				'genres' => $genres
			]);
	}

	public function store(Request $request) {

		$input = $request->all();
		$validation = Validator::make($input, [

			'name' => 'required',
			'album' => 'required',
			'media' => 'required',
			'genre' => 'required',
			'composer' => 'required',
			'milliseconds' => 'required|numeric',
			'bytes' => 'required|numeric',
			'price' => 'required|numeric'

		]);

		if ($validation->fails()) {

			return redirect('/tracks/new')
			->withInput()
			->withErrors($validation);

		}

		DB::table('tracks')->insert([

			'Name' => $request->name,
			'AlbumId' => $request->album,
			'MediaTypeId' => $request->media,
			'GenreId' => $request->genre,
			'Composer' => $request->composer,
			'Milliseconds' => $request->milliseconds,
			'Bytes' => $request->bytes,
			'UnitPrice' => $request->price

		]);

		return redirect('/tracks');
	}
}