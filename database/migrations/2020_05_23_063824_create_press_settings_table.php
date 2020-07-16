<?php

use App\PressSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePressSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('press_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('company')->nullable();
            $table->string('email')->nullable();
            $table->string('profile')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('about_us_image')->nullable();
            $table->integer('number_of_post')->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });

        $press_setting=new PressSetting();
        $press_setting->title='Press Сontact';
        $press_setting->name='Naomi Shaw';
        $press_setting->designation='PR + Partnerships';
        $press_setting->company='Fragrance';
        $press_setting->email='nshaw@scentbird.com';
        $press_setting->profile='website/img/press-profile.png';
        $press_setting->banner_image='/website/img/for-press-bg.jpg';
        $press_setting->about_us_image='/website/img/press-bottom.png';
        $press_setting->number_of_post='8';
        $press_setting->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('press_settings');
    }
}