<?php

use App\FaqCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->integer('serial')->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });

        $faq_names = ['General','My Account','Membership & Subscribing','Billing & Payment','Shipping & Tracking','Returns'];
        
        $count=1;
        foreach ($faq_names as $key => $faq_name) {
            $faq_category=new FaqCategory();
            $faq_category->name=$faq_name;
            $faq_category->serial=$count++;
            $faq_category->save();
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_categories');
    }
}