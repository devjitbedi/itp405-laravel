<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NavController extends Controller {

	public function index(Request $request) {


			return view('index');
	}
}