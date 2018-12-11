<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductHelper extends Model {

	public static function endoscopes() {
		return Endoscope::get();
	}

	public static function uzi() {
		return UziApparat::get();
	}

	public static function rentgen() {
		return Rentgen::get();
	}

	public static function reanims() {
		return Reanims::get();
	}

	public static function all() {
		return [
			'endoscopes' => self::endoscopes(),
			'uzi' => self::uzi(),
			'rentgen' => self::rentgen(),
			'reanims' => self::reanims()
		];
	}

}
