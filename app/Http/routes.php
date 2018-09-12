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
    return view('auth.login');
});


Route::get('/home', function () {
    return view('stagiaire.home');
});


Route::get('/test', function () {
    return view('stagiaire.test');
});


Route::auth();

//Route::get('/home', 'HomeController@index');
Route::get('/stagiaires/{stagiaire}', 'HomeController@index');



Route::get('/stagiaire.create',[
	'uses'=>'Stagiairecontroller@getviewStag',
	'as'=>'viewcreateStag',
]);

Route::get('/home',[
	'uses'=>'Stagiairecontroller@getviewAll',
	'as'=>'getviewAll',
]);


Route::post('/stagiaire/create',[
	'uses'=>'Stagiairecontroller@create',
	'as'=>'create',
]);



Route::get('/stagiaire/delete',[
	'uses'=>'StagiaireController@delete',
	'as'=>'delete',
]);



Route::get('/stagiaire/showstag/{id}',[
	'uses'=>'Stagiairecontroller@showstag',
	'as'=>'showstag',
]);



Route::get('/stagiaire/edit/{id}',[
	'uses'=>'Stagiairecontroller@edit',
	'as'=>'edit',
]);




// Route::resource('/stagiaire', 'Stagiairecontroller@index');
