<?php

use App\RecentlyView;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecentlyViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recently_views', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->default(1);
            $table->integer('product_id')->default(1);
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });


        for($i=1; $i<=10; $i++){
            $s= new RecentlyView();
            $s->user_id=1+$i%5;
            $s->product_id=1+$i%5;
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
        Schema::dropIfExists('recently_views');
    }
}
