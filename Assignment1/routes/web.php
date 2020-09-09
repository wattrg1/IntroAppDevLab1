<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'home');
//Route::get('/', 'SearchController@index');

Route::get('/parties', 'PartyController@index');
Route::get('/','SearchController@index');
Route::get('admin/api/politician','SearchController@getAutocompleteData');
