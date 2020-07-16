<?php

use App\Supplier;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('supplier_name', 200)->nullable();
            $table->string('contact_name', 200)->nullable();
            $table->string('designation', 500)->nullable();
            $table->string('address', 500)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('mobile_number', 15)->nullable();
            $table->string('telephone_number', 15)->nullable();
            $table->string('fax_number', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('trade_license', 200)->nullable();
            $table->string('vat_reg_no', 200)->nullable();
            $table->string('vat_rate', 200)->nullable()->default(5);
            $table->tinyInteger('status');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->timestamps();
        });

        $faker = Faker\Factory::create();
        for($i=1; $i<=15; $i++){
            $s= new Supplier();
            $s->supplier_name = $faker->name;
            $s->contact_name = $faker->name;
            $s->designation = 'Supplier';
            $s->address = $faker->address;
            $s->city = $faker->city;
            $s->country = $faker->country;
            $s->mobile_number = $faker->phoneNumber;
            $s->telephone_number = $faker->randomNumber($nbDigits = 7, $strict = false);
            $s->email = $faker->email;
            $s->trade_license = $faker->randomNumber($nbDigits = 7, $strict = false);
            $s->vat_reg_no = $faker->randomNumber($nbDigits = 7, $strict = false);
            $s->status = $i;
            $s->created_by = $i;
            $s->updated_by = $i;
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
        Schema::dropIfExists('suppliers');
    }
}
