<?php

use App\Role;
use App\Staff;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
		    $table->integer('role_id');
            $table->timestamps();
        });



        $roles = Role::all();
        foreach ($roles as $role) {
            if ($role->id < 16 && $role->id != 1) {
                $s = new Staff();
                $s->user_id = $role->id;
                $s->role_id = $role->id;
                $s->save();
            }
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
