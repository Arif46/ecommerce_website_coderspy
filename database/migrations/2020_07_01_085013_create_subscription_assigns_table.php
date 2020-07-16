<?php

use App\SubscriptionAssign;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionAssignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_assigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('product_plan_id');
            $table->foreign('product_plan_id')->references('id')->on('product_plans');
            $table->unsignedBigInteger('duration_plan_id');
            $table->foreign('duration_plan_id')->references('id')->on('duration_plans'); 
            $table->unsignedBigInteger('month');
            $table->year('year');
            $table->integer('total_skip_month')->nullable();
            $table->integer('start_queue')->nullable();
            $table->integer('frequency_month')->default(1);
            $table->timestamps();
        });


        $assign = New SubscriptionAssign();
        $assign->user_id = 16;
        $assign->product_plan_id = 1;
        $assign->duration_plan_id = 1;
        $assign->month = date('m');
        $assign->year = date('Y');
        $assign->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_assigns');
    }
}
