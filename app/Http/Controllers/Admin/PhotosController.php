<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PhotosRequest;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PhotosController extends Controller {

	public function index() {
		$data = Photo::view();
		return view('admin.photos.index')->with($data);
	}

	public function create() {
		//
	}

	public function store(PhotosRequest $request) {
		DB::beginTransaction();
		try {
			foreach ($request->photos as $photo) {
				$pathToSave = 'photos/' . $request->category;
				if ($request->maker != null) {
					$pathToSave .= '/' . $request->maker;
				}
				$filePath = $photo->store($pathToSave);
				Photo::create([
					'category' => $request->category,
					'maker' => $request->maker,
					'path' => $filePath
				]);
			}
			DB::commit();
		} catch (\Exception $exception) {
			DB::rollBack();
		}
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
