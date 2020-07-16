<?php

use App\CareerPage;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('details')->nullable();
            $table->string('img', 255)->nullable();
            $table->string('title')->nullable();
            $table->tinyInteger('active_status')->nullable()->default(1);
            $table->timestamps();
        });

        $career_page = new CareerPage();
        $career_page->title = "It’s not work. It is passion";
        $career_page->img = "public/uploads/career/banner.jpg";
        $career_page->details = "When you join Al Haramain, you don’t just join a perfume business, you join an ethnically and culturally diverse, global organization that consistently strives for the best in everything that it does. You join a team of people who are passionate about what they do and are able to come up with innovative solutions and ideas. Consequently, we are always on the search for the best talent that we can find.If you are bright, highly skilled and have a strong work ethic and would like to join Al Haramain, click on the link below and upload your CV and cover letter.";
        $career_page->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_pages');
    }
}