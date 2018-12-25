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
            //
        ]);
    }
}
