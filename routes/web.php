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

Route::get('/', 'SignupController@show')->name('signup.show');

Route::post('/signup', 'SignupController@store')->name('signup.store');

Route::get('/signedup/{user}', 'SignupController@done')->name('signedup');

