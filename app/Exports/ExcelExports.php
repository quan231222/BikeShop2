<?php

namespace App\Exports;

use App\CategoryProductExcel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExcelExports implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CategoryProductExcel::all();
    }
}
