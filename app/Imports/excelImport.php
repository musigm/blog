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
            'Product_ID'=>$row['product_id'],
            'Lookup'=>$row['lookup'] ,
            'Description'=>$row['description'],
            'Quantity'=>$row['quantity'],
            'Style_Name'=>$row['style_name'],
            'ColorParentSku'=>$row['colorparentsku'],
            'Last_updated'=>$row['last_updated'],
            'Stores'=>$row['stores']
         ]);
    }
}
