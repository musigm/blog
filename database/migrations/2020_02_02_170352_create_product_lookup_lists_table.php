<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductLookupListsTable extends Migration
{
    protected $table = 'product_lookup_lists';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_lookup_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Product_ID');
            $table->string('Lookup');
            $table->string('Description');
            $table->string('Quantity');
            $table->string('Style_Name');
            $table->string('ColorParentSku');
            $table->string('Last_updated');
            $table->string('Stores');
            // $table->bigIncrements('id');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_lookup_lists');
    }
}
