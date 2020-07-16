<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('verification_status')->default('0');
            $table->text('verification_info')->nullable();
            $table->integer('cash_on_delivery_status')->default('0');
            $table->integer('sslcommerz_status')->default('0');
            $table->integer('stripe_status')->default('0');
            $table->integer('paypal_status')->default('0');
            $table->string('paypal_client_id')->nullable()->default('NULL');
            $table->string('paypal_client_secret')->nullable()->default('NULL');
            $table->string('ssl_store_id')->nullable()->default('NULL');
            $table->string('ssl_password')->nullable()->default('NULL');
            $table->string('stripe_key')->nullable()->default('NULL');
            $table->string('stripe_secret')->nullable()->default('NULL');
            $table->integer('instamojo_status')->default('0');
            $table->string('instamojo_api_key')->nullable()->default('NULL');
            $table->string('instamojo_token')->nullable()->default('NULL');
            $table->integer('razorpay_status')->default('0');
            $table->string('razorpay_api_key')->nullable()->default('NULL');
            $table->string('razorpay_secret')->nullable()->default('NULL');
            $table->integer('paystack_status')->default('0');
            $table->string('paystack_public_key')->nullable()->default('NULL');
            $table->string('paystack_secret_key')->nullable()->default('NULL');
            $table->integer('voguepay_status')->default('0');
            $table->string('voguepay_merchand_id')->nullable()->default('NULL');
            $table->double('admin_to_pay')->nullable();
            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        });

        $s= "INSERT INTO `sellers` (`id`, `user_id`, `verification_status`, `verification_info`, `cash_on_delivery_status`, `sslcommerz_status`, `stripe_status`, `paypal_status`, `paypal_client_id`, `paypal_client_secret`, `ssl_store_id`, `ssl_password`, `stripe_key`, `stripe_secret`, `instamojo_status`, `instamojo_api_key`, `instamojo_token`, `razorpay_status`, `razorpay_api_key`, `razorpay_secret`, `paystack_status`, `paystack_public_key`, `paystack_secret_key`, `voguepay_status`, `voguepay_merchand_id`, `admin_to_pay`, `created_at`, `updated_at`) VALUES
            (1, 3, 1, '[{\"type\":\"text\",\"label\":\"Name\",\"value\":\"Mr. Seller\"},{\"type\":\"select\",\"label\":\"Marital Status\",\"value\":\"Married\"},{\"type\":\"multi_select\",\"label\":\"Company\",\"value\":\"[\\\"Company\\\"]\"},{\"type\":\"select\",\"label\":\"Gender\",\"value\":\"Male\"},{\"type\":\"file\",\"label\":\"Image\",\"value\":\"uploads\\/verification_form\\/CRWqFifcbKqibNzllBhEyUSkV6m1viknGXMEhtiW.png\"}]', 1, 1, 1, 0, NULL, NULL, 'activ5c3c5dac9254d', 'activ5c3c5dac9254d@ssl', 'pk_test_CqAfBW85ZifDyuEOhGaD4ZbE', 'sk_test_mRRMmV4GnBJ4UT7qeLlDe5F8', 0, NULL, NULL, 0, NULL, NULL, 1, 'pk_test_855c5f39d8f662a5d63fabe25ead64fe21018f15', 'sk_test_1175e92519f88e9c665d0b980f53ff1cfffbbc38', 0, NULL, 78.40, '2018-10-07 04:42:57', '2020-04-21 11:19:45'),
            (2, 27, 0, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, 0.00, '2020-06-06 01:18:32', '2020-06-06 01:18:32')";
        DB::statement($s);  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
}