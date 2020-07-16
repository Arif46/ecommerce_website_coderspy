<?php

use App\MyList;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->default(1);
            $table->string('list_name')->nullable();
            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        });

        for($i=1; $i<=10; $i++){
            $s= new MyList();
            $s->user_id=1+$i%5;
            $s->list_name='List '. $i;
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
        Schema::dropIfExists('my_lists');
    }
}