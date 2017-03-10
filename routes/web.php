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

Route::Auth();

//can change quest to auth if needed
Route::group(['middleware' => 'guest'], function () {
	Route::get('/dashboard', ['as' => 'dashboard','uses' => 'IndexController@index']);
	Route::get('/', ['as' => 'dashboard','uses' => 'IndexController@index']);
	Route::get('/table', ['as' => 'table','uses' => 'TableController@index']);
	Route::get('/profile', ['as' => 'profile','uses' => 'ProfileController@index']);
	Route::get('/typography', ['as' => 'typography','uses' => 'TypoController@index']);
	Route::get('/maps', ['as' => 'maps','uses' => 'MapsController@index']);
	Route::get('/icon', ['as' => 'icon','uses' => 'IconController@index']);
	Route::get('/notification', ['as' => 'notification','uses' => 'NotificationController@index']);
	Route::get('/upgrade', ['as' => 'upgrade','uses' => 'UpgradeController@index']);
});
