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
Route::get('/', 'HomeController@homepage');

Auth::routes();

Route::get('/home', 'HomeController@homepage');

Route::get('create','PoetryController@create');

Route::post('poetry/save', 'PoetryController@insert');

Route::get('followers/id', 'FollowersController@makefollow');

Route::get('email-sam','HomeController@sampleemil');
