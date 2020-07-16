<?php

use App\ExpenseSubCategory;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_sub_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ex_category_id')->default(1);
            $table->string('name', 200)->nullable();
            $table->string('description', 200)->nullable();
            $table->integer('serial')->default(1);
            $table->tinyInteger('active_status')->default(1);
            $table->unsignedInteger('created_by')->nullable()->default(1)->unsigned();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedInteger('updated_by')->nullable()->default(1)->unsigned();
            $table->foreign('updated_by')->references('id')->on('users');;
            $table->timestamps();
        });


        // try to genarate sample expenses
        try {
            $d[1] = ['Warehouse Rent ', 'Licensing ', 'Repair & Maintenance ', 'Utilities', 'Employee Expenses', 'Insurance', 'Advertising & Marketing', 'Product Supplies', 'Office Supplies'];
            $d[2]=[];
            $d[3]=[];
            $d[4]=['Electricity','Water','Sewarage','Internet&Telephone','Mobile Package'];
            $d[5]=['Employee Visa Expenses ','Salary & Wages','Allowances (Eid Bonus, Air Ticket etc)','Staff Uniform ','Legal Expenses'];
            $d[6]=['Warehouse Insurance', 'Employee Insurance', 'Vehicle Insurance'];
            $d[7]=['IOS Platform ','Android Platform ','Facebook ','Twitter','Instagram ','Linkedin','Pinterest','Snapchat','Tiktok','Youtube ','Social Media Management ','Software & Development ','Hosting Server Cost','Gmail Business Account ','Exibitions (travel etc)'];
            $d[8]=['Finished Product Box Cost','Finished Product Bubble Wrap','Subcription Box Cost','Subcription Atomizer Cost','Subcription Foam Cost','Sample Bottle','Sample Paper', 'Branding Tape Cost','Branding Ribbon Cost','Cartridges','Essential Oil Diffisuer', 'Bakhoor Stand', 'Agarbati Stand', 'Fragrance Diffisuer ','Box Lock & Box','Coffee Jar','Coffee'];
            $d[9]=['Stationary','Toiletries'];

            foreach ($d as $key=>$categories) {
                foreach($categories as $category) {
                    $s = new ExpenseSubCategory();
                    $s->name = $category;
                    $s->ex_category_id = $key;
                    $s->description = "System Created";
                    $s->save();
                }
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
        Schema::dropIfExists('expense_sub_categories');
    }
}
