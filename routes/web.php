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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','HomeController@home');
Route::get('/category','HomeController@category');
Route::get('/contact','HomeController@contact');
Route::get('/single','HomeController@single');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
