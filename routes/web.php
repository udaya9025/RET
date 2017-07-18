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
    if(Auth::check()){

    	return view('home');
    }else{

    	return redirect('/login');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@homepage')->name('home');

Route::get('create','PoetryController@create');

Route::post('poetry/save', 'PoetryController@insert');
