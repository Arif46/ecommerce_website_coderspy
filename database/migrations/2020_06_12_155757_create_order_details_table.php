<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id');
            $table->integer('seller_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->text('variation')->nullable();
            $table->double('price')->nullable();
            $table->double('tax')->nullable();
            $table->double('shipping_cost')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('payment_status')->default('unpaid');
            $table->string('delivery_status')->default('pending');
            $table->string('shipping_type')->nullable();
            $table->integer('pickup_point_id')->nullable();
            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
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
        Schema::dropIfExists('order_details');
    }
}