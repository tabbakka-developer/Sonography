<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetProductPageRequest;
use App\UziApparat;
use Illuminate\Http\Request;

class PageController extends Controller {

	public function uzi() {
		return view('index.vue-templates.category-inner')->with([
			'category' => 'uzi'
		]);
	}

	public function rentgens() {
		return view('index.category')->with([
			'category' => 'rentgens'
		]);
	}

	public function endoscopes() {
		return view('index.category')->with([
			'category' => 'endoscopes'
		]);
	}

	public function reanim() {
		return view('index.category')->with([
			'category' => 'reanim'
		]);
	}

	public function product(GetProductPageRequest $request) {
		switch ($request->category) {
			case 'uzi':
				$product = UziApparat::get($request->id);
				return view('index.vue-templates.item-inner');
				break;

			default:
				break;
		}
	}

}
