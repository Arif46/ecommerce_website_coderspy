<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_queues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subscription_id');
            $table->unsignedInteger('user_id');
            $table->string('products')->comment('product id array');
            $table->string('date')->comment('mont/year');
            $table->tinyInteger('payment_method');
            $table->tinyInteger('order_status');
            $table->tinyInteger('paymant_status');
            $table->double('paid_amount');
            $table->tinyInteger('is_active');
            $table->timestamps();


            $table->foreign('subscription_id')->references('id')->on('subscriptions');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_queues');
    }
}
