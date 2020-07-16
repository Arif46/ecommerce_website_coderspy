<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaryGeneratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_generates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('month');
            $table->double('amount',15,2);
            $table->tinyInteger('payment_status');
            $table->tinyInteger('payment_type');
            $table->unsignedInteger('paid_by');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('paid_by')->references('id')->on('users');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
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
        Schema::dropIfExists('salary_generates');
    }
}
