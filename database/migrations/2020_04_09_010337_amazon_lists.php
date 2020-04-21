<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AmazonLists extends Migration
{
    protected $table = 'amazon_lists';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amazon_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('date/time');
            $table->string('settlement_id');
            $table->string('type');
            $table->string('order_id');
            $table->string('sku');
            $table->string('description');
            $table->string('quantity');
            $table->string('marketplace');
            $table->string('fulfillment');
            $table->string('order_city');
            $table->string('order_state');
            $table->string('order_postal');
            $table->string('product_sales');
            $table->string('shipping_credits');
            $table->string('gift_wrap_credits');
            $table->string('promotional_rebates');
            $table->string('sales_tax_collected');
            $table->string('Marketplace_Facilitator_Tax');
            $table->string('selling_fees');
            $table->string('fba_fees');
            $table->string('other_transaction_fees');
            $table->float('other');
            $table->float('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
