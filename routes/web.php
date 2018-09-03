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
    return view('index.index');
})->name('main');

Route::get('/news', function () {
	return view('index.news');
})->name('news');

Route::get('/about', function () {
	return view('index.about');
})->name('about');
