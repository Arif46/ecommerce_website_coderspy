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
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->integer('guest_id')->nullable();
            $table->text('shipping_address')->nullable();
            $table->string('payment_type',20)->nullable();
            $table->string('payment_status',20)->default('unpaid');
            $table->text('payment_details')->nullable();
            $table->double('grand_total')->nullable();
            $table->double('coupon_discount')->nullable();
            $table->text('code')->nullable();
            $table->integer('date');
            $table->integer('viewed')->default('0');
            $table->integer('delivery_viewed')->default('0');
            $table->integer('payment_status_viewed')->default('0');
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
        Schema::dropIfExists('orders');
    }
}