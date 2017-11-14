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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// Dashboard Route
Route::get('/dashboard', ['as' => 'dashboard', 'uses'=> 'AdminController@getDashboard']);
Route::get('/userlist', ['as'=> 'userlist', 'uses'=> 'AdminController@getUserList']);








//Authentication Route List
// Route::get('auth', ['as'=>'login', 'uses'=>'Auth\AuthController@getLogin']);
// Route::post('auth', ['as'=>'login', 'uses'=>'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as'=>'logout','uses'=>'Auth\LoginController@logout']);
