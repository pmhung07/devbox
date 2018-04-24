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

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
|
*/

Route::group(['namespace' => 'Admin'], function () {

	Route::group(['namespace' => 'Auth'], function () {

		Route::get('admin/auth/login', 'LoginController@show');
		Route::post('admin/auth/login', 'LoginController@postLogin');

	});

	Route::group(['middleware' => 'admin.permission'], function(){

		Route::prefix('admin')->group(function(){

			Route::get('dashboard','DashboardController@show');
		
			Route::get('tags','TagsController@show');

			//Route::get('post', '');

		});

	});

});


/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
|
*/



