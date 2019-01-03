<?php
/**
 * Created by PhpStorm.
 * User: tabbakka
 * Date: 2018-12-11
 * Time: 22:49
 */

namespace App\Interfaces;


use phpDocumentor\Reflection\Types\Integer;

interface Product {


	public static function store(Array $data);
	public static function get($id = null);
	public static function remove(Integer $id);
	public static function edit(Integer $id, Array $data);
	public static function prices();
	public static function showed();
	public function getPhotosAttribute();
	public static function uniqueBrands();

}
