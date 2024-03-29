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

Route::resource('/responses', 'ResponseController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/graph', 'HomeController@graph')->name('graph');
Route::get('/all', 'HomeController@all')->name('all');
