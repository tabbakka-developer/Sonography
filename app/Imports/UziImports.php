<?php

namespace App\Imports;

use App\UziApparat;
use Maatwebsite\Excel\Concerns\ToModel;

class UziImports implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UziApparat([
        	'model' => $row[0],
            'brand' => $row[1],
            'code' => $row[2],
			'sub_category' => $row[3],
	        'sub_category_more' => $row[4],
	        'quality' => $row[5],
	        'show_product' => $row[6],
	        'animals' => $row[7],

	        'country' => $row[9],
	        'level' => $row[10],
	        'screen_size' => $row[11],
	        'memory' => $row[12],
	        'warranty' => $row[13],

	        'price' => $row[75],
	        'currency' => $row[76],
	        'is_have' => $row[81],
	        'description' => $row[103],

	        'free_delivery' => $row[125],
	        'free_engineer' => $row[126]
        ]);
    }
}
