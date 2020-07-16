<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloggers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('blog_link')->nullable();
            $table->integer('no_of_readers')->nullable();
            $table->string('vlog_link')->nullable();
            $table->integer('no_of_subscribes')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('youtube')->nullable();
            $table->string('message')->nullable();
            $table->string('portfolio')->nullable();
            $table->string('file')->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bloggers');
    }
}