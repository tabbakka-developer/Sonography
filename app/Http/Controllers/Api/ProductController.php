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
				return response()->json([
					'success' => true,
					'prices' => UziApparat::prices()
				]);
				break;

			case '':
				break;

			default:
				break;
		}
	}

}
