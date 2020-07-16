<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRawMaterialsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raw_materials_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('raw_id')->default(1);
            $table->integer('supplier_id')->default(1);
            $table->double('supplier_price',15,2);
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
        Schema::dropIfExists('raw_materials_details');
    }
}
