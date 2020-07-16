<?php

use App\ProductPlan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('qty');
            $table->tinyInteger('active')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });

        $plan = new ProductPlan();
        $plan->name = "1 Product/Per Month";
        $plan->qty = 1;
        $plan->active = 1;
        $plan->save();

        $plan = new ProductPlan();
        $plan->name = "2 Product/Per Month";
        $plan->qty = 2;
        $plan->active = 1;
        $plan->save();

        $plan = new ProductPlan();
        $plan->name = "3 Product/Per Month";
        $plan->qty = 3;
        $plan->active = 1;
        $plan->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_plans');
    }
}
