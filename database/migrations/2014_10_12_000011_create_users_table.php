<?php

use App\Role;
use App\User;
use App\Staff;
use App\Reference;
use App\UserEmergencyContact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->default(16);
            $table->string('user_type', 100)->nullable();
            $table->string('full_name', 191)->nullable();
            $table->integer('gender')->nullable();
            $table->date('birth_date')->nullable();    
            $table->string('blood_group', 191)->nullable();
            $table->string('father_name', 191)->nullable();
            $table->string('mother_name', 191)->nullable();
            $table->string('nationality', 30)->nullable();
            $table->string('religion', 10)->nullable();
            $table->integer('marital_status')->nullable();
            $table->string('id_number', 300)->nullable();
            $table->string('id_type', 300)->nullable();
            $table->date('id_expire_date')->nullable();
            $table->string('driving_license_number', 300)->nullable();
            $table->date('driving_license_issue_date', 300)->nullable();
            $table->string('phone', 200)->nullable();
            $table->string('home_number', 200)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('mailing_address', 191)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('present_address', 300)->nullable();
            $table->string('permanent_address', 300)->nullable();
            $table->integer('referred_by')->nullable();
            $table->string('provider_id', 50)->nullable();      
            $table->string('password', 191)->nullable();
            $table->string('employeer', 191)->nullable();
            $table->string('employee_code', 191)->nullable();
            $table->string('visa_status', 191)->nullable();
            $table->string('joining_date', 191)->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('designation_id')->nullable();
            $table->string('basic_salary', 191)->nullable();
            $table->string('other_income', 191)->nullable();
            $table->string('commission_grade', 191)->nullable();
            $table->string('electronic_signature', 191)->nullable();

            $table->string('remember_token', 100)->nullable();
            $table->string('avatar', 256)->nullable();
            $table->string('avatar_original', 256)->nullable();
            $table->string('image', 256)->nullable();
            $table->string('country', 30)->nullable();
            $table->string('city', 30)->nullable();
            $table->string('postal_code', 200)->nullable();
          
        
          
            $table->double('balance')->nullable();
            $table->string('referral_code')->nullable();
            $table->tinyInteger('newsletter')->default(0);
            $table->tinyInteger('notification')->default(0);
            $table->tinyInteger('sample')->default(0);
            $table->tinyInteger('public_profile')->default(1);
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });

        $faker = Faker\Factory::create();
        $roles= Role::all();
        foreach($roles as $role){
            $s = new User();
            $s->role_id= $role->id;
            if($role->id==1) {
                $s->user_type = 'admin';
            } elseif ($role->id == 16) {
                $s->user_type = 'customer';
            }else{
                $s->user_type = 'staff';

            }


            $s->full_name=  $faker->name;
            $s->email=  'user'.$role->id.'@gmail.com';
            $s->password = Hash::make(123456);
            $s->email_verified_at = date('Y-m-d H:i:s');
            $s->avatar_original = 'uploads/users/'.$role->id.'.png';
            $s->phone = $faker->phoneNumber;
            $s->department_id = 1;
            $s->designation_id = 1;
            $s->save();

            $ref = new Reference();
            $ref->user_id = $s->id;
            $ref->save();

            $EmgContact = new UserEmergencyContact();
            $EmgContact->user_id = $s->id;
            $EmgContact->save();
        } 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}