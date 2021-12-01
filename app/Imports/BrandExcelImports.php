<?php

namespace App\Imports;

use App\BrandExcel;
use Maatwebsite\Excel\Concerns\ToModel;

class BrandExcelImports implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new BrandExcel([
            'brand_name' => $row[0],
            'brand_desc' => $row[1],
            'brand_status' => $row[2],
        ]);
    }
}
