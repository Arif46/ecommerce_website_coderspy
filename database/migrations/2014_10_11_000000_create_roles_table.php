<?php

use App\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 200);
            $table->string('redirect_path', 200);
            $table->string('route', 200);
            $table->text('permissions');
            $table->integer('created_by')->default(1)->unsigned();
            $table->integer('updated_by')->default(1)->unsigned();
            $table->timestamps();
        });
        $roles = [
            'Super Admin', 'Admin', 'Finance', 'HR', 
            'Accountant', 'Legal', 'Social Media Manager', 
            'Purchasing', 'Receivables', 'Store', 'In House', 
            'Subscription', 'Sample', 'Merchant', 
            'Brand Synchronizer', 'Customer'];
        foreach ($roles as $role) {
            $s = new Role();
            $s->name = $role;
            $s->redirect_path = str_replace(' ', '-', strtolower($role));
            $s->route = str_replace(' ', '_', strtolower($role));
            $s->permissions = '["1","2","3","4"]';
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
        Schema::dropIfExists('roles');
    }
}