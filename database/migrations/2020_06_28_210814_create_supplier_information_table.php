<?php

use App\SupplierInformation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 200)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('address2', 200)->nullable();
            $table->string('mobile', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('contact', 200)->nullable();
            $table->string('phone', 200)->nullable();
            $table->string('fax', 200)->nullable();
            $table->string('city', 200)->nullable();
            $table->string('state', 200)->nullable();
            $table->string('zip', 200)->nullable();
            $table->string('country', 200)->nullable();
            $table->string('details', 200)->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });

        $s = new SupplierInformation();
        $s->name = "Mr. Aziz Akram Noyon";
        $s->address = "Dubai";
        $s->address2 = "Dhaka";
        $s->phone = "01910077628";
        $s->mobile = "01910077628";
        $s->email = "aa.noyon@gmail.com";
        $s->save();


        $s = new SupplierInformation();
        $s->name = "Dilruba Yeasmin";
        $s->address = "Dhaka";
        $s->address2 = "Bangladesh";
        $s->phone = "01910077628";
        $s->mobile = "01910077628";
        $s->email = "ddipa57@gmail.com";
        $s->save();

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_information');
    }
}
