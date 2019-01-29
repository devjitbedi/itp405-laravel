<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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


			return view('tracks', [

				'tracks' => $tracks,
				'genre' => $request->query('genre')
			]);
	}
}