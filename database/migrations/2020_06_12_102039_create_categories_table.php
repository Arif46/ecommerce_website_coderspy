<?php

use App\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->double('commision_rate')->nullable();
            $table->string('banner')->nullable();
            $table->string('icon')->nullable();
            $table->string('featured')->nullable()->default(1);
            $table->string('top')->nullable()->default(1);
            $table->string('slug')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable(); 

            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        }); 

        $names =["Spray","Oil","Ambiance","Natural","Essential","Bakhoor"];

        foreach ($names as $key => $name) {
            $category= new Category();
            $category->name = $name;
            $category->commision_rate = "0.00";
            $category->banner = "uploads/categories/banner/".Str::lower($name).".png";
            $category->icon = "uploads/categories/banner/".Str::lower($name).".png";
            $category->slug = Str::lower($name);
            $category->meta_title = $name;
            $category->meta_description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
            $category->save();
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}