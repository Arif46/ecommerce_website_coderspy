<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->integer('age')->nullable();
            $table->integer('about_source')->nullable();
            $table->integer('product_using_time')->nullable();
            $table->integer('interested_product')->nullable();
            $table->string('other_source')->nullable();
            $table->string('about_new_release')->nullable();
            $table->string('suggest_product')->nullable();
            $table->integer('overall_experience')->nullable();
            $table->integer('impressed_product')->nullable();
            $table->string('message')->nullable();
            $table->string('captcha')->nullable();
            $table->integer('feedback')->nullable();
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
        Schema::dropIfExists('personal_requests');
    }
}