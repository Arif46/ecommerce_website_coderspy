<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('expense_date');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('expense_categories');
            $table->unsignedBigInteger('sub_category_id')->nullable()->default();
            $table->foreign('sub_category_id')->references('id')->on('expense_sub_categories');
            $table->double('amount');
            $table->unsignedInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedInteger('updated_by');
            $table->foreign('updated_by')->references('id')->on('users');;
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
        Schema::dropIfExists('expenses');
    }
}
