<?php

use App\SeoSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeoSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('keyword')->nullable();
            $table->string('author')->nullable();
            $table->string('revisit')->nullable();
            $table->string('sitemap_link')->nullable();
            $table->string('description')->nullable();
            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        }); 

        $s= new SeoSetting();
        $s->keyword="keyword";
        $s->author="keyword";
        $s->revisit="345";
        $s->sitemap_link="keyword";
        $s->description="keyword"; 
        $s->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo_settings');
    }
}
