<?php

use App\ExpenseCategory;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 200)->nullable();
            $table->string('description', 200)->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('serial')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });



        // try to genarate sample expenses
        try {
            $d = ['Warehouse Rent ', 'Licensing ', 'Repair & Maintenance ', 'Utilities', 'Employee Expenses', 'Insurance', 'Advertising & Marketing', 'Product Supplies', 'Office Supplies'];
            foreach ($d as $category) {
                $s = new ExpenseCategory();
                $s->name = $category;
                $s->description = "System Created";
                $s->save();
            }
        } catch (\Throwable $th) {
            Log::info($th);
        }
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_categories');
    }
}
