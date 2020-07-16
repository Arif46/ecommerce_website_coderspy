<?php

use App\PurchaseUnit;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('full_name')->nullable();
            $table->integer('active_status')->default(1);
            $table->unsignedInteger('created_by')->default(1);
            $table->unsignedInteger('updated_by')->default(1);
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->timestamps();
        });
        $s= new PurchaseUnit();
        $s->name='Kg';
        $s->full_name= 'Kilogram';
        $s->save();


        $s = new PurchaseUnit();
        $s->name = 'gr';
        $s->full_name = 'Gram';
        $s->save();


        $s = new PurchaseUnit();
        $s->name = 'qt';
        $s->full_name = 'Quintal';
        $s->save();


        $s = new PurchaseUnit();
        $s->name = 'l';
        $s->full_name = 'Liter';
        $s->save();

        
        $s = new PurchaseUnit();
        $s->name = 'bl';
        $s->full_name = 'Barrel';
        $s->save();

        $s = new PurchaseUnit();
        $s->name = 'gl';
        $s->full_name = 'Gallon';
        $s->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_units');
    }
}
