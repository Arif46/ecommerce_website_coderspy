<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
		    $table->integer('category_id');
		    $table->string('slug', 255)->default(null);
		    $table->string('meta_title', 255)->default(null);
		    $table->text('meta_description');
            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        });

        $s= "INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
            (1, 'Agarbati', 5, 'Agarbati', 'Agarbati', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2019-03-12 06:13:24', '2020-06-09 13:01:58'),
            (2, 'o Air Freshner', 5, 'o-Air-Freshner', 'o Air Freshner', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2019-03-12 06:13:44', '2020-06-09 13:01:27'),
            (3, 'Mamul', 5, 'Mamul', 'Mamul', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2019-03-12 06:13:59', '2020-06-09 13:00:55'),
            (4, 'Oud Ma’al Attar', 5, 'Oud-Maal-Attar', 'Oud Ma’al Attar', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2019-03-12 06:18:25', '2020-06-09 13:00:22'),
            (5, 'Bakhoor', 5, 'Bakhoor', 'Bakhoor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2019-03-12 06:18:38', '2020-06-09 12:59:44'),
            (6, 'Essential Oil', 5, 'Essential-Oil', 'Essential Oil', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2019-03-12 06:18:51', '2020-06-09 12:59:08'),
            (7, 'o Fragrance Candles', 5, 'o-Fragrance-Candles-kTXza', 'o Fragrance Candles', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2020-06-09 13:02:38', '2020-06-09 13:02:38'),
            (8, 'Agarwood', 6, 'Agarwood-lK5Ia', 'Agarwood', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2020-06-09 13:03:07', '2020-06-09 13:03:07'),
            (9, 'Zafran', 6, 'Zafran-esYm9', 'Zafran', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2020-06-09 13:03:30', '2020-06-09 13:03:30'),
            (10, 'Musk', 6, 'Musk-U4mbf', 'Musk', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2020-06-09 13:03:54', '2020-06-09 13:03:54'),
            (11, 'Amber', 6, 'Amber-cnxcZ', 'Amber', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2020-06-09 13:04:19', '2020-06-09 13:04:19')";
        DB::statement($s);    
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
}