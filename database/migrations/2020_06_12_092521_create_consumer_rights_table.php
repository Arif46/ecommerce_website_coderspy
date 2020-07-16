<?php

use App\ConsumerRight;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumerRightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumer_rights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('details')->nullable();
            $table->string('img', 255)->nullable();
            $table->string('region')->nullable();
            $table->tinyInteger('active_status')->nullable()->default(1);
            $table->timestamps();
        });

        $Consumer_Right = new ConsumerRight();
        $Consumer_Right->region = "abcdefg";
        $Consumer_Right->img = "public/uploads/consumer_rights/1.jpg";
        $Consumer_Right->details = "Something not right or have an issue? Contact our friendly customer service team on 800 626744 (UAE toll-free) or +971 800 626744 (International), or Please check our Help Center For more information on consumer rights, visit www.consumerrights.ae or call Ahlan Dubai on +971 600 545 555.";
        $Consumer_Right->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumer_rights');
    }
}