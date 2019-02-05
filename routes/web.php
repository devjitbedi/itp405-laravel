<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('', 'NavController@index');

Route::get('/genres', 'GenresController@index');
Route::post('/genres/{id}', 'GenresController@store');
Route::get('/genres/{id}/edit', 'GenresController@edit');

Route::get('/tracks', 'TracksController@index');
Route::get('/tracks/new', 'TracksController@create');
Route::post('/tracks/', 'TracksController@store');

Route::get('/playlists', 'PlaylistsController@index');
Route::get('/playlists/new', 'PlaylistsController@create');
Route::get('/playlists/{id}', 'PlaylistsController@index');
Route::post('/playlists/', 'PlaylistsController@store');
