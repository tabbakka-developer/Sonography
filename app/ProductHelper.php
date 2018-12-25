<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductHelper extends Model {

	public static function endoscopes() {
		return Endoscope::all();
	}

	public static function uzi() {
		return UziApparat::all();
	}

	public static function rentgen() {
		return Rentgen::all();
	}

	public static function reanims() {
		return Reanims::all();
	}

	public static function allCategories() {
		return [
			'total' => (self::endoscopes()->count() + self::uzi()->count() + self::rentgen()->count() + self::reanims()->count()),
			'endoscopes' => self::endoscopes(),
			'uzi' => self::uzi(),
			'rentgen' => self::rentgen(),
			'reanims' => self::reanims()
		];
	}
}
