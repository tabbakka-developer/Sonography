<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotosController extends Controller {

	public function index() {
		$data = Photo::view();
		return view('admin.photos.index')->with($data);
	}

	public function create() {
		//
	}

	public function store(Request $request) {
		//
	}

	public function show($id) {
		//
	}

	public function edit($id) {
		//
	}

	public function update(Request $request, $id) {
		//
	}

	public function destroy($id) {
		//
	}
}
