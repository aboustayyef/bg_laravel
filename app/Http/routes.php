<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/ajax/{aj_page}', [
	'uses'	=> 'AjaxController@main'
]);