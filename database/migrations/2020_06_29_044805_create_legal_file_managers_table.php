<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalFileManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_file_managers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('legal_file_types');
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('file')->nullable();
            $table->date('expire_date');
            $table->tinyInteger('status');
            $table->unsignedInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedInteger('updated_by');
            $table->foreign('updated_by')->references('id')->on('users');;
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
        Schema::dropIfExists('legal_file_managers');
    }
}
