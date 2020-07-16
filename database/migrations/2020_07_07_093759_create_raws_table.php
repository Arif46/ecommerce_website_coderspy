<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('raw_id')->nullable();
            $table->string('raw_name');
            $table->string('serial_no')->nullable();
            $table->string('model')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->float('price');
            $table->string('image')->nullable();
            $table->unsignedInteger('unit')->nullable();
            $table->float('vat')->nullable();
            $table->float('tax')->nullable();
            $table->unsignedInteger('supplier_id');
            $table->float('supplier_price');
            $table->text('description')->nullable();
            $table->tinyInteger('active_status');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
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
        Schema::dropIfExists('raws');
    }
}
