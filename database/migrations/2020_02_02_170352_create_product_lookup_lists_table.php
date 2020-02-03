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
            $table->string('Product_lookup');
            $table->string('Notes');
            $table->string('Product_ID');
            $table->string('Lot_ID');
            $table->string('Packing');
            $table->string('Stores');
            $table->string('Description');
            $table->string('Mfg_product_ID');
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
