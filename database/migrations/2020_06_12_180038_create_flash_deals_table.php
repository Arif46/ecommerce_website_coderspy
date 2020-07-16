<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlashDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flash_deals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->integer('start_date')->nullable();
            $table->integer('end_date')->nullable();
            $table->integer('status')->default('0');
            $table->integer('featured')->default('0');
            $table->string('background_color')->nullable();
            $table->string('text_color')->nullable();
            $table->string('banner')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('flash_deals');
    }
}