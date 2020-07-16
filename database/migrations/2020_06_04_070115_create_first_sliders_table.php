<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('first_description')->nullable();
            $table->text('second_description')->nullable();
            $table->string('first_image')->nullable();
            $table->string('second_image')->nullable();
            $table->string('third_image')->nullable();
            $table->string('forth_image')->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->timestamps();
        });

        $faker = Faker\Factory::create();
        $s= new \App\FirstSlider();
        $s->first_description = 'Distinctio provident adipisci enim itaque et dolorem officiis eum nostrum quo occaecati est ut cupiditate ad blanditiis et facere quos ut sed et iste est laborum sed a sit dolores id eos nam quasi laboriosam aut et ullam aperiam expedita illum non dolores iusto nam et quia quam quibusdam iste qui dolores quod numquam dolorum adipisci modi sed architecto delectus esse.';
        $s->second_description = 'Tempora quisquam pariatur in nisi dolorem et eos veniam atque laboriosam voluptas recusandae cumque distinctio perspiciatis ea eius odio neque reprehenderit harum ut explicabo quo aliquid ex est possimus doloribus explicabo non nihil facilis in animi ipsum fuga dolores recusandae voluptas commodi culpa soluta delectus et velit harum corporis alias molestiae sed ratione quidem vel ipsa a pariatur amet et et dolorem et voluptate laboriosam suscipit tenetur';
        $s->first_image = 'uploads/slider/first_slider/1.png';
        $s->second_image = 'uploads/slider/first_slider/2.png';
        $s->third_image = 'uploads/slider/first_slider/3.png';
        $s->forth_image = 'uploads/slider/first_slider/4.png';
        $s->is_active = 1;
        $s->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('first_sliders');
    }
}