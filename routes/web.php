<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'collection'], function () {
    Route::get('/', function () { return redirect('/collection/home'); }); // redirect collection to collection/home
    Route::get('/home', function (Request $request) { return view('collection.home')->with('request', $request); });
    Route::get('/office', function (Request $request) { return view('collection.office')->with('request', $request); });
    Route::get('/accessories', function (Request $request) { return view('collection.accessories')->with('request', $request); });
});

Route::get('/contact', function () {
    return view('contact');
});
