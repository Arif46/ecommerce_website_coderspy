<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_links', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('module_id')->default(1);
            $table->string('name', 200);
            $table->integer('created_by')->default(1)->unsigned();
            $table->integer('updated_by')->default(1)->unsigned();
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
        Schema::dropIfExists('module_links');
    }
}
