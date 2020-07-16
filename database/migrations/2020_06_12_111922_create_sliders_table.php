<?php

use App\Slider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 191)->default(null);
		    $table->text('short_description');
		    $table->integer('serial_no')->default(null);
		    $table->string('photo', 255)->default(null);
		    $table->integer('published')->default('1');
            $table->boolean('status')->default('0');
            $table->string('link', 255)->default(null);
            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        });
        
        for ($i=1; $i <= 4; $i++) { 
            $slider = new Slider();
            $slider->title = 'Italian shows brand new';
            $slider->short_description = 'Aasrem dfgum dolor sivst amet, consectetur adipisicing elitvde, sed dvo eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad micnim veniam, quis nostrud exercita.';
            $slider->serial_no = $i;
            $slider->photo = '/website/img/slider/'.$i.'.jpg';
            $slider->link = 'https://www.google.com/';
            $slider->save();
        }
        
    
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}