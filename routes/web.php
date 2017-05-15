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
    return view('homepage')->with('pageName', 'home');
});

Route::group(['prefix' => 'collection'], function(){
	Route::get('/', function(){ return redirect('/collection/home') ;}); // redirect collection to collection/home
	Route::get('/home', function(){ return view('collection.home') ;});
	Route::get('/office', function(){ return view('collection.office') ;});

});
