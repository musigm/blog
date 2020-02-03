<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_lookup_lists extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Product_lookup','Notes','Product_ID','Lot_ID','Packing','Stores','Description','Mfg_product_ID'
    ];
}
