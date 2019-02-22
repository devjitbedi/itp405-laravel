<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SettingsController extends Controller
{
    public function index(Request $request) {

			return view('settings');
	}

	public function store(Request $request) {
  

        if ($request->maintenance) {

        	DB::table('configurations')
            ->where('name', 'like', '%maintenance%')
            ->update(['value' => 'on']);

        }

        else {

        	DB::table('configurations')
            ->where('name', 'like', '%maintenance%')
            ->update(['value' => 'off']);
        	
        }

        return view('settings');

	}

}
