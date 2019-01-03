<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\ProductsPricesRequest;
use App\UziApparat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller {

	public function prices(ProductsPricesRequest $request) {
		switch ($request->category) {

			case 'uzi':
				$prices =  UziApparat::prices();
				return response()->json([
					'success' => true,
					'prices' => $prices
				]);
				break;

			case '':
				break;

			default:
				break;
		}
	}

	public function uziPhotos() {
		$uzi = UziApparat::showed();
		dd($uzi);
	}

	public function uzi() {
		$uzi = UziApparat::showed();
		return response()->json([
			'success' => true,
			'data' => $uzi
		]);
	}

	public function reanim() {

	}

	public function rentgen() {

	}

	public function endo() {

	}

}
