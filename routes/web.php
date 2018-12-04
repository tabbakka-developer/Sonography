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

function checkAdminDomain() {
	$host = Request::getHost();
	if ($host === 'xn--80aimpg.xn--80afqrebpd7a.xn--p1ai') {

		Route::get('/', function() {
			return view('admin.auth.login');
		});

	} elseif ($host === 'xn--80afqrebpd7a.xn--p1ai') {

		Route::get('/', function() {
			return Redirect::to('https://xn--80aimpg.xn--80afqrebpd7a.xn--p1ai/');
		});

	}
}



//admin

Route::get('/login', "Admin\Auth\LoginController@showForm");
Route::get('/logout', "Admin\Auth\LoginController@logout");
Route::post('/login', "Admin\Auth\LoginController@login");

Route::group(['middleware' => 'auth'], function () {

	Route::get('/dashboard', "Admin\DashBoardController@index");
	Route::get('/products', "Admin\ProductsController@index");

});

//checkAdminDomain();


//Route::get('/admin', function () {
//	return view('admin.dashboard');
//});

//Route::get('/pre', function () {
//	return view('pre.index');
//});
//
//Route::get('/', function () {
//    return view('index.index');
//})->name('main');
//
//Route::get('/news', function () {
//	return view('index.news');
//})->name('news');
//
//Route::get('/about', function () {
//	return view('index.about');
//})->name('about');
//
//Route::get('/category', function () {
//	return view('index.category');
//});
//
//Route::get('/item', function () {
//	return view('index.item');
//});



//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
