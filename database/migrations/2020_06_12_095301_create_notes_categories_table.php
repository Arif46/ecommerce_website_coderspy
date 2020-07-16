<?php

use App\NotesCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 
        Schema::create('notes_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->nullable();
            $table->string('image',255)->nullable();
            $table->string('description',255)->nullable();
            $table->tinyInteger('active_status')->nullable()->default(1);
            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        });


        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++) {
            $s = new NotesCategory();
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
        Schema::dropIfExists('notes_categories');
    }
}