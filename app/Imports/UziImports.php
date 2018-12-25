<?php

namespace App\Imports;

use App\UziApparat;
//use Maatwebsite\Excel\Concerns\Importable;
//use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\ToModel;
//use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//use Maatwebsite\Excel\Events\BeforeImport;
//use Maatwebsite\Excel\Reader;

class UziImports implements ToModel, WithHeadingRow {

//	use Importable, RegistersEventListeners;
//
//	public static function beforeImport(BeforeImport $event) {
//		/** @var Reader $reader */
//		$reader = $event->getReader();
//		$reader->
//	}

	/**
	 * @param array $row
	 *
	 * @return \Illuminate\Database\Eloquent\Model|null
	 */
	public function model(array $row) {

		foreach ($row as &$cell) {
			if ($cell == "+") {
				$cell = true;
			} elseif ($cell == "-") {
				$cell = false;
			} elseif ($cell == null) {
				$cell = false;
			}
		}

		dd($row);

		return new UziApparat([
			'model' => $row['marka_apparata'],
			'brand' => $row['proizvoditel'],
			'code' => $row['kod_tovara'],
			'sub_category' => $row['podkategoriya'],
//	        'sub_category_more' => $row[4],
			'quality' => $row['sostoyanie'],
			'show_product' => $row['otobrazhat_na_sayte'],
			'animals' => $row['veterinarnoe'],

			'country' => $row['strana_proizvodstva'],
			'level' => $row['klass_apparata'],
			'screen_size' => $row['razmer_ekrana_v_dyuymakh'],
			'memory' => $row['obem_pamyati'],
			'warranty' => $row['srok_garantii_mes'],

			'price' => $row['tsena'],
			'currency' => $row['valyuta'],
			'is_have' => $row['v_nalichii'],
			'description' => $row['opisanie'],

			'free_delivery' => $row['besplatnaya_dostavka'],
			'free_engineer' => $row['besplatnyy_vyezd_inzhenera']
		]);
	}
}
