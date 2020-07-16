<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('module_id')->default(1);
            $table->integer('module_link_id')->default(1);
            $table->integer('user_id')->default(1);
            $table->integer('role_id')->default(1);
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
        Schema::dropIfExists('module_permissions');
    }
}
