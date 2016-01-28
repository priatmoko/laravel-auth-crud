<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::get('/', function () {
	return view('welcome');
})->middleware('guest');

Route::group(['middleware' => ['web']], function () {

	//Member route    
	Route::get('members','MemberController@index');
	Route::get('member/create','MemberController@create');
	Route::get('member/{member}/edit','MemberController@edit');

	Route::post('member/store','MemberController@store');
	Route::patch('member/update/{member}','MemberController@update');
	Route::delete('member/{member}','MemberController@destroy');

	// Authentication Routes...
	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', 'Auth\AuthController@postLogin');
	Route::get('logout', 'Auth\AuthController@logout');

	// Registration Routes...
	Route::get('register', 'Auth\AuthController@getRegister');
	Route::post('register', 'Auth\AuthController@postRegister');

});
