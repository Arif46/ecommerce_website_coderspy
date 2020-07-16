<?php

use App\PurchaseProduct;
use App\PurchaseCategory;
use App\PurchaseSubCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code');
            $table->integer('stock');
            $table->integer('category_id');
            $table->integer('subcategory_id')->nullable();
            $table->unsignedInteger('unit_id');
            $table->tinyInteger('active_status');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');

            $table->timestamps();
        });

        $all_categories= PurchaseSubCategory::all();
        $faker = Faker\Factory::create();
        foreach ($all_categories as $key => $value) {
            $s = new PurchaseProduct();
            $s->name = $faker->text(20);
            $s->code = '987654321' . rand() % 100;
            $s->stock = 1 + rand() % 100;
            $s->category_id = $value->category_id;
            $s->subcategory_id =$value->id;
            $s->unit_id =1+rand()%5;
            $s->created_by =1;
            $s->updated_by =1;
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
        Schema::dropIfExists('purchase_products');
    }
}
