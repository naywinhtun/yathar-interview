<?php

Route::group(['middleware' => ['guest']], function () {

	Route::get('/login','LoginController@index')->name('login');
	Route::post('/login','LoginController@store');

	Route::get('/register','RegisterController@create');
	Route::post('/register','RegisterController@store');

});

Route::group(['middleware' => ['auth']], function () {

	Route::get('/','ProjectController@index')->name('home');

	Route::get('/logout','LoginController@destroy');

	Route::get('project/create','ProjectController@create');
	Route::get('project/{project}','ProjectController@edit');
	Route::post('project','ProjectController@store');
	Route::patch('project/{project}','ProjectController@update');
	Route::delete('project/{project}','ProjectController@destroy');

});