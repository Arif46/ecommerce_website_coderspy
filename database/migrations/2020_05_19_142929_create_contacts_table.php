<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('position')->nullable();
            $table->string('phone')->nullable();
            $table->string('company_name')->nullable();
            $table->string('postal_area')->nullable();
            $table->string('country')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_email')->nullable();
            $table->integer('no_of_employee')->nullable();
            $table->integer('establishment_year')->nullable();
            $table->string('distribution_area')->nullable();
            $table->string('current_delarship')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}