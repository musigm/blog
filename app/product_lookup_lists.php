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
        'Product_ID','Lookup','Description','Quantity','Style_Name','ColorParentSku','Last_updated','Stores'
    ];
}
