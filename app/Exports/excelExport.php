<?php

namespace App\Exports;

use App\product_lookup_lists;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\ShouldAutoSize; //自動調整欄位寬度
use Maatwebsite\Excel\Concerns\WithHeadings; //表頭

class excelExport implements FromArray,WithHeadings ,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $product_lookup_lists;

    public function __construct(array $product_lookup_lists)
    {
        $this->product_lookup_lists = $product_lookup_lists;
    }

    public function Array(): array
    {
        return $this->product_lookup_lists;
    }

    // 表頭
    public function headings(): array
    {
        return [
            '',
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
