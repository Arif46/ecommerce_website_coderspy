<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalarySetupDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_setup_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('salary_setup_id');
            $table->unsignedInteger('benifit_id');
            $table->double('amount',15,2);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
//            $table->foreign('salary_setup_id')->references('id')->on('salary_setups');
//            $table->foreign('benifit_id')->references('id')->on('add_benifits');
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
        Schema::dropIfExists('salary_setup_details');
    }
}
