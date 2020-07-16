<?php

use App\BlendSubscription;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlendSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blend_subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('my_blend')->nullable();
            $table->string('subscription')->nullable();
            $table->text('my_blend_url')->nullable();
            $table->text('subscription_url')->nullable();
            $table->timestamps();
        });
        
        $blend_sub = new BlendSubscription();
        $blend_sub->my_blend = 'uploads/blendsub/bland.jpeg';
        $blend_sub->subscription = 'uploads/blendsub/subscription.jpeg';
        $blend_sub->my_blend_url = 'admin/my-blend-subscription/create';
        $blend_sub->subscription_url = 'admin/my-blend-subscription/create';
        $blend_sub->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blend_subscriptions');
    }
}