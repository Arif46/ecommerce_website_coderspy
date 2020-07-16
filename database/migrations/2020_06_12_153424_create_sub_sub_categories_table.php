<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_sub_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sub_category_id');
            $table->string('name',50);
            $table->string('slug')->nullable()->default('NULL');
            $table->string('meta_title')->nullable()->default('NULL');
            $table->text('meta_description');
            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        });

        $s= "INSERT INTO `sub_sub_categories` (`id`, `sub_category_id`, `name`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
            (1, 1, 'Demo sub sub category 1', 'Demo-sub-sub-category-1', 'Demo sub sub category', NULL, '2019-03-12 06:19:49', '2019-08-06 06:07:19'),
            (2, 1, 'Demo sub sub category 2', 'Demo-sub-sub-category-2', 'Demo sub sub category 2', NULL, '2019-03-12 06:20:23', '2019-08-06 06:07:19'),
            (3, 1, 'Demo sub sub category 3', 'Demo-sub-sub-category-3', 'Demo sub sub category 3', NULL, '2019-03-12 06:20:23', '2019-08-06 06:07:19')";
        DB::statement($s);    
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_sub_categories');
    }
}