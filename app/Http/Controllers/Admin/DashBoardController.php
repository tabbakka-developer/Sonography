<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
    public function index() {
    	//todo: get all data for dashboard
	    return view('admin.dashboard');
    }
}
