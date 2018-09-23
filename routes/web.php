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
Route::post('dologin', 'ActiveController@login');
Route::get('/', function () {
    return view('auth/login');
});
Auth::routes();
Route::get('/activite/token/id/{id}', 'ActiveController@activite');


Route::get('/home', 'HomeController@index')->name('home');
