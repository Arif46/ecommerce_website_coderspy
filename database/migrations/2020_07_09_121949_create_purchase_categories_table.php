<?php

use App\PurchaseCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->timestamps();
        });

        $data=['Raw Materials', 'Finished Product', 'Subscription', 'Sample', 'Store Stationary', 'Office Supplies'];
        foreach($data as $c){
            $s= new PurchaseCategory();
            $s->name= $c;
            $s->created_by= 1;
            $s->updated_by= 1;
            $s->save();
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_categories');
    }
}
