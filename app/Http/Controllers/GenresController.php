<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class GenresController extends Controller {

	public function index(Request $request) {

			$query = DB::table('genres');
			$genres = $query->get();


			return view('genres.index', [

				'genres' => $genres
				
			]);
	}


	public function edit($id) {

		$genres = DB::table('genres')
		->where('GenreId', $id)
		->first();


		return view('genres.edit', [

				'genres' => $genres
				
			]);
	}

	public function store(Request $request, $id) {

		$input = $request->all();
		$validation = Validator::make($input, [

			'name' => 'required|min:3|unique:genres,Name'

		]);

		if ($validation->fails()) {

			return redirect('/genres/{id}/edit')
			->withInput()
			->withErrors($validation);

		}

		DB::table('genres')
            ->where('GenreId', $id)
            ->update(['Name' => $request->name]);

		return redirect('/genres');
	}




}

