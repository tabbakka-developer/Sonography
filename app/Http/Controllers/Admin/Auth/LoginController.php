<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller {

	public function showForm() {
		if (Auth::check()) {
			return redirect()->to('Admin\DashBoardController@index');
		} else {
			return view('admin.auth.login');
		}
	}

	public function login(Request $request) {
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required|min:3'
		]);

		dd($request);

		if (Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
			return redirect()->action('Admin\DashboardController@index');
		}

		$errors = new MessageBag(['password' => ['Email или пароль неверные.']]);
		return redirect()->back()->withErrors($errors)->withInput($request->only('email', 'remember'));
	}

	public function logout(Request $request) {
		Auth::guard('admin')->logout();
		$request->session()->flush();

		throw new AuthenticationException();
	}

}
