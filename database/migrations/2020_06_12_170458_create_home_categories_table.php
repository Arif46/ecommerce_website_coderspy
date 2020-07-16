<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('subsubcategories',1000)->nullable();
            $table->integer('status')->default('1');
            $table->timestamps();
        });
        $s= "INSERT INTO `home_categories` (`id`, `category_id`, `subsubcategories`, `status`, `created_at`, `updated_at`) VALUES
            (1, 1, '[\"1\"]', 1, '2019-03-12 06:38:23', '2020-06-04 04:17:16'),
            (2, 2, '[\"10\"]', 1, '2019-03-12 06:44:54', '2019-03-12 06:44:54')";
            DB::statement($s);  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_categories');
    }
}