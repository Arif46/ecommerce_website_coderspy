<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePickupPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickup_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('staff_id');
            $table->string('name');
            $table->text('address');
            $table->string('phone');
            $table->integer('pick_up_status')->nullable();
            $table->integer('cash_on_pickup_status')->nullable();
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
        Schema::dropIfExists('pickup_points');
    }
}