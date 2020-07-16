<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('default_value',200)->nullable();
            $table->string('tax_name',200)->nullable();
            $table->string('nt',200)->nullable();
            $table->string('reg_no',200)->nullable();
            $table->string('is_show',200)->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tax_settings');
    }
}
