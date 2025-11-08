<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\WebController@index');
Route::get('/blogs/{slug}', '\App\Http\Controllers\WebController@blog');
Route::get('/blog/{slug}', '\App\Http\Controllers\WebController@category');


Route::fallback(function () {
    return view('errors.404')
        ->with('message', 'Page not found');
});
