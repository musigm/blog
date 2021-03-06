<?php

namespace App\Exports;

use App\product_lookup_lists;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize; //自動調整欄位寬度
use Maatwebsite\Excel\Concerns\WithHeadings; //表頭

class excel_allExport implements FromCollection ,WithHeadings ,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return product_lookup_lists::all();
    }

    // 表頭
    public function headings(): array
    {
        return [
            'Product_ID',
            'Lookup',
            'Description',
            'Quantity',
            'Style_Name',
            'ColorParentSku',
            'Last_updated',
            'Stores'
        ];
    }
}
