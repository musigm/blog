<?php

namespace App\Imports;

use App\product_lookup_lists;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class excelImport implements ToModel,WithHeadingRow
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        foreach ($row as $key => $value) {
            if ($value == null){
                $row[$key] = '';
            }
        }

        return new product_lookup_lists([
            'Product_lookup'=>$row['product_lookup'],
            'Notes'=>$row['notes'] ,
            'Product_ID'=>$row['product_id'],
            'Lot_ID'=>$row['lot_id'],
            'Packing'=>$row['packing'],
            'Stores'=>$row['stores'],
            'Description'=>$row['description'],
            'Mfg_product_ID'=>$row['mfg_product_id']
         ]);
    }
}
