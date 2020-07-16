<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlashDealProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flash_deal_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('flash_deal_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->double('discount')->nullable();
            $table->string('discount_type')->nullable();
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
        Schema::dropIfExists('flash_deal_products');
    }
}