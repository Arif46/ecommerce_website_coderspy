<?php

use App\BankAccount;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('banking_id', 200)->nullable();
            $table->date('date')->nullable();
            $table->unsignedBigInteger('bank_id')->nullable();
            $table->foreign('bank_id')->references('id')->on('bank_accounts');
            $table->string('deposit_type', 200)->nullable();
            $table->string('transaction_type', 200)->nullable();
            $table->string('description', 200)->nullable();
            $table->string('amount', 200)->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });


        // try to genarate sample expenses
        try {

            $s = new BankAccount();

            $s->date = "1995-01-05";
            $s->bank_id = 1;
            $s->deposit_type = "Dhaka";
            $s->transaction_type = "";
            $s->description = "abcfhb fhvnf hvfbhfjv";
            $s->amount = "500";
            $s->save();
        } catch (\Throwable $th) {
            Log::info($th);
        }
    }


    public function down()
    {
        Schema::dropIfExists('bank_transactions');
    }
}
