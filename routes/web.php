<?php

Route::get('/', function() {
	return view('layout');
});

Route::get('posts', 'PostsController@index');
Route::get('posts/new', 'PostsController@new');
Route::post('posts', 'PostsController@store');
