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

// Route::get('/', function () {
//     return view('welcome');
// });

//home route
Route::get('/', 'HomeController@index');

//job route
Route::get('/job','JobsController@index');
Route::get('/job/{ID}','JobsController@show');


Route::post('auth', 'AuthController@checkLogin');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
