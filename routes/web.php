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

		Route::get('/', function () {

			if (\Illuminate\Support\Facades\Auth::guest()) {
				return redirect()->action("Admin\Auth\LoginController@showForm");
			} else {
				return redirect()->action("Admin\DashBoardController@index");
			}

		});

		Route::get('/login', "Admin\Auth\LoginController@showForm");
		Route::get('/logout', "Admin\Auth\LoginController@logout");
		Route::post('/login', "Admin\Auth\LoginController@login");

		Route::group(['middleware' => 'auth'], function () {

			Route::get('/dashboard', "Admin\DashBoardController@index");
			Route::resource('products', "Admin\ProductsController");

		});

	} elseif ($host === 'xn--80afqrebpd7a.xn--p1ai') {

//		Route::get('/', function() {
//			return Redirect::to('https://xn--80aimpg.xn--80afqrebpd7a.xn--p1ai/');
//		});

		Route::get('/pre', function () {
			return view('pre.index');
		});

		Route::get('/', function () {
			return view('index.index');
		})->name('main');

		Route::get('/news', function () {
			return view('index.news');
		})->name('news');

		Route::get('/about', function () {
			return view('index.about');
		})->name('about');

		Route::get('/category', function () {
			return view('index.category');
		});

		Route::get('/item', function () {
			return view('index.item');
		});

	}
}

if (env("APP_ENV") == 'local') {
	//dev

	Route::get('/admin', function () {
		return view('admin.dashboard');
	});

	Route::get('/pre', function () {
		return view('pre.index');
	});

	Route::get('/', function () {
		return view('index.index');
	})->name('main');

	Route::get('/news', function () {
		return view('index.news');
	})->name('news');

	Route::get('/about', function () {
		return view('index.about');
	})->name('about');

	Route::get('/category', function () {
		return view('index.category');
	});

	Route::get('/item', function () {
		return view('index.item');
	});

	//admin

	Route::get('/login', "Admin\Auth\LoginController@showForm");
	Route::get('/logout', "Admin\Auth\LoginController@logout");
	Route::post('/login', "Admin\Auth\LoginController@login");

	Route::group(['middleware' => 'auth'], function () {

		Route::get('/dashboard', "Admin\DashBoardController@index");
		Route::resource('products', "Admin\ProductsController");

	});


} else {
	//prod
	checkAdminDomain();
}
