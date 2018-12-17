<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	protected $table = "Photos";

	public static function view() {

		return [
			'total' => self::all()->count(),
			'uzi' => self::uzi(),
			'endoscopes' => self::endoscopes(),
			'reanim' => self::reanim()
		];

	}

	public static function uzi() {
		return self::where('category', 'uzi')->get();
	}

	public static function rentgens() {
		return self::where('category', 'rentgens')->get();
	}

	public static function endoscopes() {
		return self::where('category', 'endoscopes')->get();
	}

	public static function reanim() {
		return self::where('category', 'reanim')->get();
	}
}
