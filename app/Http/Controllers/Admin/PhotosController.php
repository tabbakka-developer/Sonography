<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PhotosRequest;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class PhotosController extends Controller {

	public function index() {
		$data = Photo::view();
		return view('admin.photos.index')->with($data);
	}

	public function create() {
		//
	}

	public function makers() {
		$makers = Photo::makers();
		return response()->json($makers->toArray());
	}

	public function store(PhotosRequest $request) {
		DB::beginTransaction();
		try {
			foreach ($request->photos??[] as $photo) {
				$pathToSave = 'public/photos/' . $request->category;
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
			return redirect()->back()->withErrors($exception->getMessage() . " " . $exception->getFile());
		}
		return redirect()
			->back()
			->with('success-message', 'Фотографии успешно добавлены!');
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

	//additional

	public function ajaxResponse($data) {
		try {
			$response = [
				'success' => true,
				'data' => $data,
				'error' => null
			];
			return response()->json($response);
		} catch (\Exception $exception) {
			return response()->json([
				'success' => false,
				'data' => null,
				'error' => $exception->getMessage()
			]);
		}
	}

	public function uzi() {
		/** @var Collection $uzi */
		$uzi = Photo::uzi();
		$this->ajaxResponse($uzi->toArray());
	}

	public function reanim() {
		$reanim = Photo::reanim();
		$this->ajaxResponse($reanim->toArray());
	}

	public function endoscopes() {
		$endo = Photo::endoscopes();
		$this->ajaxResponse($endo->toArray());
	}

	public function rentgen() {
		$rent = Photo::rentgens();
		$this->ajaxResponse($rent->toArray());
	}
}
