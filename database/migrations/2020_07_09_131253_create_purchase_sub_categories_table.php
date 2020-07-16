<?php

use App\PurchaseSubCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_sub_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('category_id')->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->timestamps();
        });


        $sucCategories[1] = [];
        $sucCategories[2] = ['Product Box', 'Bubble Wrap', 'Essential Oil Diffuser', 'Bakhoor Stand', 'Agarbati Stand', 'Fragrance Diffuser'];
        $sucCategories[3] = ['Subscription Box', 'Subscription Atomizer', 'Subscription Foam'];
        $sucCategories[4] = ['Sample Box', 'Sample Atomizer', 'Sample Foam', 'Coffee', 'Coffee Jar'];
        $sucCategories[5] = ['Branding Tape', 'Branding Ribbon', 'Cartridge'];
        $count=1;
        foreach ($sucCategories as $subCategory) {
            foreach ($subCategory as $name) {
                $s = new PurchaseSubCategory();
                $s->name = $name;
                $s->category_id = $count;
                $s->created_by= 1;
                $s->updated_by= 1;
                $s->save();
            }
            $count++;
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_sub_categories');
    }
}
