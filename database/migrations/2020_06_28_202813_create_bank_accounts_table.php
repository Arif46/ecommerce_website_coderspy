<?php

use App\BankAccount;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankAccountsTable extends Migration
{

    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bank_name', 200)->nullable();
            $table->string('ac_name', 200)->nullable();
            $table->string('ac_number', 200)->nullable();
            $table->string('branch', 200)->nullable();
            $table->string('Signature', 200)->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });



        // try to genarate sample expenses
        try {

            $s = new BankAccount();
            $s->bank_name = 'Sonali Bank';
            $s->ac_name = "Mr.P";
            $s->ac_number = "5006";
            $s->branch = "Dhaka";
            $s->Signature = "Signature";
            $s->save();
        } catch (\Throwable $th) {
            Log::info($th);
        }
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_accounts');
    }
}
