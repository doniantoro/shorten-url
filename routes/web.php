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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','shorten@index')->name('kepo');
Route::get('/input_link','shorten@input_link');
//Route::get('{link}','shorten@redirect');
Route::get('/pesan', 'shorten@index2');
Route::get('/get-pesan', 'shorten@pesan');