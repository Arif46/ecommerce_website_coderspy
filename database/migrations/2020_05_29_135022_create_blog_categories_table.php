<?php

use App\BlogCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_name');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->tinyInteger('active_status')->comment('active=1,in-active=0');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->timestamps();
        });

        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++) {
            $s = new BlogCategory();
            $s->category_name = $faker->sentence($nbWords = 2, $variableNbWords = true);
            $s->created_by=1;
            $s->updated_by=1;
            $s->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_categories');
    }
}
