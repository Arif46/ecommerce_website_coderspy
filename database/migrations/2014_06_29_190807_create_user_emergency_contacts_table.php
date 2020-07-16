<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEmergencyContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_emergency_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('emer_cont_name')->nullable();
            $table->string('emer_cont_relationship')->nullable();
            $table->string('emer_cont_address')->nullable();
            $table->string('emer_cont_phone')->nullable();
            $table->string('emer_cont_house_no')->nullable();
            $table->string('emer_cont_email')->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('user_emergency_contacts');
    }
}