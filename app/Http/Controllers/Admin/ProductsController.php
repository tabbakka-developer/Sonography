<?php

namespace App\Http\Controllers\Admin;

use App\ProductHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller {


	public function index() {
		$products = ProductHelper::allCategories();
		return view('admin.products.index')->with($products);
	}

	public function create() {

	}

	public function store(Request $request) {

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
