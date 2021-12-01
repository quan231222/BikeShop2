<?php

namespace App\Exports;

use App\BrandExcel;
use Maatwebsite\Excel\Concerns\FromCollection;

class BrandExcelExports implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BrandExcel::all();
    }
}
