<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class Product extends Model implements Interfaces\Product {

	protected $appends = [
		'photos'
	];

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
		$prices_rub = self::selectRaw("DISTINCT price, currency")->where('currency', 'RUB')->get();
		$prices_usd = self::selectRaw("DISTINCT price, currency")->where('currency', 'USD')->get();

		$rubs = [];
		$usds = [];

		foreach ($prices_rub as $price) {
			array_push($rubs, $price->price);
		}
		foreach ($prices_usd as $price) {
			array_push($usds, $price->price);
		}

		sort($rubs);
		sort($usds);

		return [
			'USD' => $usds,
			'RUB' => $rubs
		];
	}

	public static function showed() {
		return self::where('show_product', true)->get();
	}

	public function getPhotosAttribute() {
		$model = $this->model;
		$brand = $this->brand;
		$photos = Photo::where('maker', 'LIKE', '%' . $brand . '%')->where('path', 'LIKE', '%' . $model . '%')->get();
		return $photos;
	}

	private static function _unique($field) {
		$data = self::select($field)->distinct()->get();
		return $data;
	}

	public static function uniqueCountries() {
		return self::_unique('country');
	}

	public static function uniqueQuality() {
		return self::_unique('quality');
	}

	public static function uniqueLevel() {
		return self::_unique('level');
	}

	public static function uniqueBrands() {
		return self::_unique('brand');
	}

	public static function info() {
		return [
			'brand' => self::uniqueBrands(),
			'quality' => self::uniqueQuality(),
			'level' => self::uniqueLevel(),
			'country' => self::uniqueCountries(),
		];
	}
}
