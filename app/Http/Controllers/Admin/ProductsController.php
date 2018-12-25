<?php

namespace App\Http\Controllers\Admin;

use App\ProductHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller {


	public function index() {
		$products = ProductHelper::allCategories();
		return view('admin.products.index')->with('products', $products);
	}

	public function create() {

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
