<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class amazon_lists extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date/time',
        'settlement_id',
        'type',
        'order_id',
        'sku',
        'description',
        'quantity',
        'marketplace',
        'fulfillment',
        'order_city',
        'order_state',
        'order_postal',
        'product_sales',
        'shipping_credits',
        'gift_wrap_credits',
        'promotional_rebates',
        'sales_tax_collected',
        'Marketplace_Facilitator_Tax',
        'selling_fees',
        'fba_fees',
        'other_transaction_fees',
        'other',
        'total'
    ];
}
