<?php

use App\DurationPlan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDurationPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duration_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->float('save_percent');
            $table->double('price')->default(0.00);
            $table->tinyInteger('active')->default(1); 
            // $table->unsignedInteger('created_by')->references('id')->on('users');
            // $table->unsignedInteger('updated_by')->references('id')->on('users');
            $table->timestamps();
        });

        $plan = new DurationPlan();
        $plan->name = '2 Month Plan';
        $plan->save_percent = 0;
        $plan->price = 14.95;
        $plan->save();

        $plan = new DurationPlan();
        $plan->name = '6 Month Plan';
        $plan->save_percent = 3;
        $plan->price = 43.50;
        $plan->save();

        $plan = new DurationPlan();
        $plan->name = '12 Month Plan';
        $plan->save_percent = 4;
        $plan->price = 84.00;
        $plan->save();

        $plan = new DurationPlan();
        $plan->name = '24 Month Plan';
        $plan->save_percent = 5;
        $plan->price = 162.00;
        $plan->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duration_plans');
    }
}
