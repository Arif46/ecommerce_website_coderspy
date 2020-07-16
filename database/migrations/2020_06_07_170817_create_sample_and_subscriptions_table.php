<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSampleAndSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sample_and_subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->tinyInteger('type');
            $table->double('subscription_amount',15,2);
            $table->double('shipping_charge',15,2);
            $table->tinyInteger('payment_method');
            $table->tinyInteger('email_address');
            $table->string('card_number');
            $table->string('subscription_date');
            $table->string('cvc');
            $table->string('card_holder');
            $table->string('apt_number');
            $table->string('billing_zip');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('street_address');
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
        Schema::dropIfExists('sample_and_subscriptions');
    }
}
