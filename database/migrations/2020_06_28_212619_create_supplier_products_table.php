<?php

use App\SupplierProduct;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 
        Schema::create('supplier_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('supplier_pr_id')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->double('supplier_price')->nullable();
            $table->string('product_id',200)->nullable();
            $table->string('products_model',200)->nullable();
            $table->timestamps();
        });


        $s= new SupplierProduct();
        $s->supplier_pr_id= 1;
        $s->supplier_id= 1;
        $s->supplier_price= 1200;
        $s->products_model= 'Nice';
        $s->save();


        $s= new SupplierProduct();
        $s->supplier_pr_id= 2;
        $s->supplier_id= 2;
        $s->supplier_price= 9200;
        $s->products_model= 'Nice';
        $s->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_products');
    }
}
