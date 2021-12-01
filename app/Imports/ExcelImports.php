<?php

namespace App\Imports;

use App\CategoryProductExcel;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelImports implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new CategoryProductExcel([
            'category_name' => $row[0],
            'category_desc' => $row[1],
            'category_status' => $row[2],
        ]);
    }
}
