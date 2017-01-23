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

Route::get('/', [

	'as' => 'home',
	'uses' => 'PagesController@home'
]);

Route::resource('items', 'ItemsController');

// Route::post('results', 'ItemsController@results');

Route::post('search-result',[
    'as' => 'items.searchresults',
    'uses' => 'ItemsController@results'
]);

