<?php

namespace App\Imports;

use App\amazon_lists;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class amazonImport implements ToModel,WithHeadingRow
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

        // dd(gettype($row['fba_fees']));

        // $datetime =date("Y-m-d H:i:s",strtotime(str_replace(',', '',$row['datetime']))).' '.substr($row['datetime'],-3);
        $datetime =date("Y-m-d H:i:s",strtotime(str_replace(',', '',$row['datetime'])));

        // 資料表、數字欄位

        return new amazon_lists([
            'date/time'=>$datetime,
            'settlement_id'=>$row['settlement_id'] ,
            'type'=>$row['type'],
            'order_id'=>$row['order_id'],
            'sku'=>$row['sku'],
            'description'=>$row['description'],
            'quantity'=>$row['quantity'],
            'marketplace'=>$row['marketplace'],
            'fulfillment'=>$row['fulfillment'] ,
            'order_city'=>$row['order_city'],
            'order_state'=>$row['order_state'],
            'order_postal'=>$row['order_postal'],
            'product_sales'=>$row['product_sales'],
            'shipping_credits'=>$row['shipping_credits'],
            'gift_wrap_credits'=>$row['gift_wrap_credits'],
            'promotional_rebates'=>$row['promotional_rebates'],
            'sales_tax_collected'=>$row['sales_tax_collected'],
            'Marketplace_Facilitator_Tax'=>$row['marketplace_facilitator_tax'],
            'selling_fees'=>$row['selling_fees'] ,
            'fba_fees'=>$row['fba_fees'],
            'other_transaction_fees'=>$row['other_transaction_fees'],
            'other'=>(double)$row['other'],
            'total'=>(double)$row['total']
         ]);
    }
}
