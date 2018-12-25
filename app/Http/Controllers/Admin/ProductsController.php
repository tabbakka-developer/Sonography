<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreProductRequest;
use App\Imports\UziImports;
use App\ProductHelper;
use App\UziApparat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ProductsController extends Controller {


	public function index() {
		$products = ProductHelper::allCategories();
		return view('admin.products.index')->with($products);
	}

	public function create() {

	}

	public function store(StoreProductRequest $request) {
		$path = 'public/excel/' . $request->category . '/' . $request->excel->getClientOriginalName();
		Storage::put($path, $request->excel);
		$success = false;
//		dd([
//			'path' => $path,
//			'public_path' => public_path(str_replace("public", "storage", $path))
//		]);
		switch ($request->category) {
			case 'uzi':
				$success = $this->importUzi(public_path(str_replace("public", "storage", $path)));
				break;

			case 'rentgens':
				$success = $this->importRentgens('');
				break;

			case 'endoscopes':
				$success = $this->importEndo('');
				break;

			case 'reanim';
				$success = $this->importReanim('');
				break;

			default:
				$success = false;
				break;
		}

		if ($success) {
			return redirect()
				->back()
				->with('success-message', 'Товары успешно добавлены!');
		} else {
			return redirect()
				->back()
				->withErrors('Ошибка загрузки товара!');
		}
	}

	private function importUzi($filePath) {
		try {
			Excel::import(new UziImports, $filePath);
			return true;
		} catch (\Exception $exception) {
			Log::debug($exception);
			return false;
		}
	}

	private function importRentgens($filePath) {

	}

	private function importEndo($filePath) {

	}

	private function importReanim($filePath) {

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

	#additional

	public function uzi() {
//		/** @var Collection $uzi */
//		$uzi = Photo::uzi();
////		$this->ajaxResponse($uzi->toArray());
//		return view('admin.photos.specific')->with([
//			'photos' => $uzi
//		]);
		dd("in dev");
	}

	public function reanim() {
//		/** @var Collection $reanim */
//		$reanim = Photo::reanim();
//		$this->ajaxResponse($reanim->toArray());
		dd("in dev");
	}

	public function endoscopes() {
//		/** @var Collection $endo */
//		$endo = Photo::endoscopes();
//		$this->ajaxResponse($endo->toArray());
		dd("in dev");
	}

	public function rentgen() {
//		/** @var Collection $rent */
//		$rent = Photo::rentgens();
//		$this->ajaxResponse($rent->toArray());
		dd("in dev");
	}

	public function all() {
//		$photos = Photo::all();
//		$this->ajaxResponse($photos);
		dd("in dev");
	}
}
