<?php

use App\FollowingUser;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowingUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('following_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('follower_id')->nullable();
            $table->timestamps();
        });

        $s = new FollowingUser();
        $s->user_id = 2;
        $s->follower_id = 1;
        $s->save();


        $s = new FollowingUser();
        $s->user_id = 2;
        $s->follower_id = 2;
        $s->save();

        $s = new FollowingUser();
        $s->user_id = 2;
        $s->follower_id = 3;
        $s->save();

 
        $s = new FollowingUser();
        $s->user_id = 1;
        $s->follower_id = 2;
        $s->save();


        $s = new FollowingUser();
        $s->user_id = 2;
        $s->follower_id = 2;
        $s->save();

        $s = new FollowingUser();
        $s->user_id = 3;
        $s->follower_id = 2;
        $s->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('following_users');
    }
}
