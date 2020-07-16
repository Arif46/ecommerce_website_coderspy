<?php

use App\LikeDislikeProduct;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeDislikeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->tinyInteger('is_like')->nullable()->default(1);
            $table->timestamps();
        });

        for($i=1; $i<=10; $i++){
            $s = new LikeDislikeProduct();
            $s->user_id = 1+$i%5;
            $s->product_id = 1+$i%9;
            $s->is_like= rand()%2;
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
        Schema::dropIfExists('like_dislike_products');
    }
}
