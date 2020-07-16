<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSampleAndSubscriptionInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sample_and_subscription_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subscription_id'); 
            $table->unsignedBigInteger('product_id'); 
            $table->double('product_price',15,2);
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
        Schema::dropIfExists('sample_and_subscription_infos');
    }
}
