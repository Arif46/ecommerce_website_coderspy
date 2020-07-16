<?php

use App\PressList;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePressListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('press_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->text('note')->nullable();
            $table->integer('serial_number')->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });



        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++) {
            $s = new PressList();
            $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $note = $faker->sentence($nbWords = 100, $variableNbWords = true);
            $url = $faker->url();
            $s->url = $url;
            $s->title = $title;
            $s->note = $note;
            $s->serial_number = $i;
            $s->image = 'uploads/newsroom/' . $i . '.jpg';
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
        Schema::dropIfExists('press_lists');
    }
}
