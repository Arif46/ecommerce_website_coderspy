<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('position_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('area_of_interest')->nullable();
            $table->text('cover_letter')->nullable();
            $table->string('resume')->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
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
        Schema::dropIfExists('applicant_forms');
    }
}