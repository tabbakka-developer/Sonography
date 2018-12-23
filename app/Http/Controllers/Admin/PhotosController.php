<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PhotosRequest;
use App\Photo;
use DemeterChain\C;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class PhotosController extends Controller {

	public function index() {
		$data = Photo::view();
		return view('admin.photos.index')->with($data);
	}

	public function create() {
		//
	}

	public function makers() {
		/** @var Collection $makers */
		$makers = Photo::makers();
		return response()->json($makers->toArray());
	}

	public function store(PhotosRequest $request) {
		DB::beginTransaction();
		try {
			foreach ($request->photos ?? [] as $photo) {
				$pathToSave = '/photos/' . $request->category;
				if ($request->maker != null) {
					$pathToSave .= '/' . $request->maker;
				}
				$filePath = $photo->storeAs($pathToSave, $photo->getClientOriginalName());
				Photo::create([
					'category' => $request->category,
					'maker' => $request->maker,
					'path' => $filePath
				]);

				dd($filePath);
//				list($width, $height) = getimagesize(public_path('/photos/' . $filePath));
				$img = Image::make(public_path($filePath));
				$img->resize(320, 240); //(int)$width/10, (int)$height/10
				$img->save(public_path('/thumbs/' . $filePath));
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
//		$this->ajaxResponse($uzi->toArray());
		return view('admin.photos.specific')->with([
			'photos' => $uzi
		]);
	}

	public function reanim() {
		/** @var Collection $reanim */
		$reanim = Photo::reanim();
		$this->ajaxResponse($reanim->toArray());
	}

	public function endoscopes() {
		/** @var Collection $endo */
		$endo = Photo::endoscopes();
		$this->ajaxResponse($endo->toArray());
	}

	public function rentgen() {
		/** @var Collection $rent */
		$rent = Photo::rentgens();
		$this->ajaxResponse($rent->toArray());
	}

	public function all() {
		$photos = Photo::all();
		$this->ajaxResponse($photos);
	}
}
