<?php

use App\Faq;
use App\FaqCategory;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('image')->nullable();
            $table->integer('number_of_view')->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });
        $faker=Faker::create();
        $faq_categories=FaqCategory::all();
        foreach ($faq_categories as $key => $faq_categorie) {
            $faq=new Faq();
            $faq->title=$faker->name;
            $faq->description=$faker->text;
            $faq->category_id=$faq_categorie->id;
            $faq->image="/frontend/footer/faq.jpg";
            $faq->number_of_view=5;
            $faq->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}