<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	protected $table = "photos";

//	protected $appends = [
//		'thumb'
//	];

	protected $fillable = [
		'maker',
		'category',
		'path'
	];

	public function setPathAttribute() {
		return substr($this->path, 7);
	}

	public function getThumbAttribute() {
		return substr(str_replace("/public/photos/", "/public/thumbs/", $this->path), 7);
	}

	public static function view() {

		return [
			'total' => self::all()->count(),
			'uzi' => self::uzi(),
			'endoscopes' => self::endoscopes(),
			'reanim' => self::reanim(),
			'rentgens' => self::rentgens()
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

	public static function makers() {
		return self::select('maker')->distinct()->get();
	}
}
