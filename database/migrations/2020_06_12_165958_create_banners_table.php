<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo')->nullable();
            $table->string('url',1000)->nullable();
            $table->integer('position')->default('1');
            $table->integer('published')->default('0');
            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        });

        $s= "INSERT INTO `banners` (`id`, `photo`, `url`, `position`, `published`, `created_at`, `updated_at`) VALUES
            (1, 'uploads/banners/banner.jpg', '#', 1, 1, '2019-03-12 05:58:23', '2020-06-04 04:14:37'),
            (2, 'uploads/banners/banner.jpg', '#', 1, 1, '2019-03-12 05:58:41', '2019-03-12 05:58:57'),
            (3, 'uploads/banners/banner.jpg', '#', 2, 1, '2019-03-12 05:58:52', '2020-06-04 04:17:14'),
            (4, 'uploads/banners/banner.jpg', '#', 2, 1, '2019-05-26 05:16:38', '2019-05-26 05:17:34'),
            (5, 'uploads/banners/banner.jpg', '#', 2, 1, '2019-06-11 05:00:06', '2019-06-11 05:00:27'),
            (6, 'uploads/banners/banner.jpg', '#', 1, 1, '2019-06-11 05:00:15', '2019-06-11 05:00:29'),
            (7, 'uploads/banners/banner.jpg', '#', 1, 1, '2019-06-11 05:00:24', '2020-06-04 04:16:59')";
            DB::statement($s); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}