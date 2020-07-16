<?php

use App\Wishlist;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->default(1);
            $table->integer('product_id')->default(1);
            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        });

        for ($i = 1; $i <= 10; $i++) {
            $s = new Wishlist();
            $s->user_id = 1 + $i % 5;
            $s->product_id = 1 + $i % 9;
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
        Schema::dropIfExists('wishlists');
    }
}
