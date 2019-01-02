<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class Product extends Model implements Interfaces\Product {

	public static function store(Array $data) {
		$endoscope = self::create($data);
		return $endoscope->id;
	}

	public static function get($id = null) {
		if ($id !== null) {
			return self::find($id);
		} else {
			return self::all();
		}
	}

	public static function remove(Integer $id) {
		try {
			/** @var Endoscope $endoscope */
			$endoscope = self::findOrFail($id);
			$endoscope->delete();
		} catch (\Exception $exception) {
			return $exception;
		}
		return true;
	}

	public static function edit(Integer $id, Array $data) {
		try {
			/** @var Endoscope $endoscope */
			$endoscope = self::findOrFail($id);
			$endoscope->update($data);
			$endoscope->save();
			return $endoscope;
		} catch (\Exception $exception) {
			return $exception;
		}
	}

	public static function prices() {
		$prices = self::selectRaw('DISTINCT price')->get();
		return $prices;
	}

}
