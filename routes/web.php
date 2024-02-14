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



Route::get('admin', 'AdminController@admin');

Route::get('/', 'HomeController@home');


Route::get('webhome', 'WebhomeController@webhome');
Route::post('webhomesubmit', 'WebhomeController@webhomesubmit');


Route::get('uploat', 'UploatController@uploat');
Route::post('submit', 'UploatController@submit');



Route::get('commingmovie', 'CommingmovieController@commingmovie');

Route::post('commingsubmit', 'CommingmovieController@commingsubmit');


Route::get('movie/{id}', 'MoviehomeController@movie');

