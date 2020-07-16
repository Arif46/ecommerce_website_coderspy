<?php

use App\Language;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('rtl')->nullable();
            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        });

        
        $s= new Language();
        $s->name='English';
        $s->code='en';
        $s->rtl='0';
        $s->save();

        $s= new Language();
        $s->name='Bangla';
        $s->code='bd';
        $s->rtl='0';
        $s->save();

        $s = new Language();
        $s->name = 'Arabic';
        $s->code = 'sa';
        $s->rtl = '1';
        $s->save(); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
