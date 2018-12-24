<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Photo extends Model {

	protected $table = "photos";

	protected $fillable = [
		'maker',
		'category',
		'path'
	];

	public function setPathAttribute() {
		return substr($this->path, 7);
	}

	public function getThumbAttribute() {
		$thumb = str_replace("photos", "thumbs", $this->path);
		return substr($thumb, 7);
	}

	public static function createWithThumbsAndWatermarks($photo, $category, $maker) {
		$imagePath = 'public/photos/' . $category;
		$thumbPath = 'public/thumbs/' . $category;
		if ($maker != null) {
			$imagePath .= '/' . $maker . '/';
			$thumbPath .= '/' . $maker . '/';
		}

		$imageWithWaterMark = Image::make($photo);
		$imageWithWaterMark->insert(public_path('img/watermark.png'));
		Storage::put($imagePath . $photo->getClientOriginalName(), $imageWithWaterMark->encode());

		$img = Image::make($photo->getRealPath());
		$img->fit(250, 250, function ($constraint) {
			$constraint->upsize();
		});
		$img->insert(public_path('img/watermark.png'));
		Storage::put($thumbPath . $photo->getClientOriginalName(), $img->encode());

//		dd([
//			'category' => $category,
//			'maker' => $maker,
//			'path' => $imagePath
//		]);

		return self::create([
			'category' => $category,
			'maker' => $maker,
			'path' => (string)$imagePath
		]);
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
