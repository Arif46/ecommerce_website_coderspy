<?php

use App\AboutMenu;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->integer('serial')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });

        $names =["Our Mission and Vision","Our Story","Our Guests","Our Associates","Our Communities","Our Environments","Our Partners","Charitytable giving"];
        $i=1;
        foreach ($names as $key => $name) {
            $about_menus =new AboutMenu();
            $about_menus ->name =$name;
            $about_menus ->serial =$i++;
            $about_menus ->save();
        }
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_menus');
    }
}