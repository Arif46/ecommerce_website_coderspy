<?php

use App\Module;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 200);
            $table->integer('created_by')->default(1)->unsigned();
            $table->integer('updated_by')->default(1)->unsigned();
            $table->timestamps();
        });


        $roles = ['Super Admin', 'Admin', 'Finance', 'HR', 'Accountant', 'Legal', 'Social Media Manager', 'Purchasing ', 'Receivables ', 'Store', 'In-House', 'Subscription', 'Sample', 'Merchant', 'Brand Synchronizer', 'Customer'];
        foreach ($roles as $role) {
            $s = new Module();
            $s->name = $role;
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
        Schema::dropIfExists('modules');
    }
}
