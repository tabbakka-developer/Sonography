<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\Product;
use phpDocumentor\Reflection\Types\Integer;

class Rentgen extends Model implements Product {

	public static function store(array $data) {
		// TODO: Implement store() method.
	}

	public static function get($id = null) {
		// TODO: Implement get() method.
	}

	public static function remove(Integer $id) {
		// TODO: Implement remove() method.
	}

	public static function edit(Integer $id, array $data) {
		// TODO: Implement edit() method.
	}
}
