<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('merchant_id')->unsigned()->references('id')->on('merchants');
            $table->integer('customer_id')->unsigned()->references('id')->on('customers');
            $table->integer('item_id')->unsigned()->references('id')->on('items');
            $table->string('status');
            $table->float('total_price');
            $table->float('balance');
            $table->string('delivery_type');
            $table->string('payment_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
