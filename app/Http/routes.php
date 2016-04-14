<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('obstacle-race', 'ObstacleRaceController');
Route::resource('hidden-guest', 'HiddenGuestController');

Route::get('kana-mutti', 'KanaMuttiController@getGame');
Route::post('kana-mutti-post', 'KanaMuttiController@setData');
Route::get('drifting-tree', 'DriftingTreeController@getGame');
Route::post('drifting-tree-post', 'DriftingTreeController@setData');
