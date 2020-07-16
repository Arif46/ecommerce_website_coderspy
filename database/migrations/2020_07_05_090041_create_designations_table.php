<?php

use App\Designation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('des_name', 100);
            $table->tinyInteger('active_status')->default(1);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->timestamps();
        });

        for ($i=1; $i < 5; $i++) { 
            $des = new Designation();
            $des->des_name = 'Designation-'.$i;
            $des->created_by = $i;
            $des->updated_by = $i;
            $des->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designations');
    }
}