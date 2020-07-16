<?php

use App\TopNote;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_notes', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('type')->default('top');
            $table->string('image');
            $table->text('description')->nullable();
            $table->integer('category_id')->nullable()->default(1);
            $table->boolean('status');
            $table->timestamps();
        });


        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++) {
            $s = new TopNote();
            $s->category_id = $i;
            $s->name = $faker->sentence($nbWords = 2, $variableNbWords = true);
            $s->description = $faker->text($maxNbChars = 200);
            $s->image = 'website/img/notes/' . $i . '.jpg';
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
        Schema::dropIfExists('top_notes');
    }
}