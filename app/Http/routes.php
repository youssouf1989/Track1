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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

//Route::get('/client/details/{id}','ClientController@client_details');

Route::get('/clients','ClientController@index');

Route::get('/clients/create','ClientController@create');
Route::post('/clients', 'ClientController@store');
Route::get('/clients/{id}','ClientController@show');
Route::get('/clients/{id}/edit','ClientController@edit');
Route::put('/clients/{id}','ClientController@update');
Route::patch('/clients/{id}','ClientController@update');
Route::post('/clients/{id}/delete','ClientController@destroy');
Route::post('clients/search','ClientController@search');






//Route::resource('clients', 'ClientController');




//Route::resource('clients','ClientController');


