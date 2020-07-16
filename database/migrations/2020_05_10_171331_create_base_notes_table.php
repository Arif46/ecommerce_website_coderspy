<?php

use App\BaseNote;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_notes', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('type')->default('base');
            $table->string('slug')->nullable();
            $table->string('image');
            $table->text('description')->nullable();
            $table->integer('category_id')->nullable()->default(1);
            $table->boolean('status');
            $table->timestamps();
        });

        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++) {
            $s = new BaseNote();
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
        Schema::dropIfExists('base_notes');
    }
}
