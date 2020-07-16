<?php

use App\Country;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('nicename')->nullable();
            $table->string('iso3')->nullable();
            $table->string('numcode')->nullable();
            $table->string('phonecode')->nullable();
            $table->integer('region_id')->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });

        $countries = [ 'Afghanistan', 'Armenia', 'Azerbaijan', 'Bahrain', 'Bangladesh'];
        foreach ($countries as $key => $countrie) {
            $coun = new Country();
            $coun->name = $countrie;
            $coun->code = '["1","2","3","4","5"]';
            $coun->nicename = '---';
            $coun->iso3 = '---';
            $coun->numcode = '---';
            $coun->phonecode = '---';
            $coun->region_id = '1';
            $coun->save();
        }
        
        $countries = [ 'Angola', 'Cameroon', 'Central African Republic', 'Chad', 'Democratic Republic of the Congo'];
        foreach ($countries as $key => $countrie) {
            $coun = new Country();
            $coun->name = $countrie;
            $coun->code = '---';
            $coun->nicename = '---';
            $coun->iso3 = '---';
            $coun->numcode = '---';
            $coun->phonecode = '---';
            $coun->region_id = '2';
            $coun->save();
        }
        $countries = [ 'Afghanistan', 'Åland Islands', 'Albania', 'Algeria', 'Andorra'];
        foreach ($countries as $key => $countrie) {
            $coun = new Country();
            $coun->name = $countrie;
            $coun->code = '---';
            $coun->nicename = '---';
            $coun->iso3 = '---';
            $coun->numcode = '---';
            $coun->phonecode = '---';
            $coun->region_id = '3';
            $coun->save();
        }
        $countries = [ 'Russia', 'Ukraine', 'France', 'Spain', 'Sweden'];
        foreach ($countries as $key => $countrie) {
            $coun = new Country();
            $coun->name = $countrie;
            $coun->code = '---';
            $coun->nicename = '---';
            $coun->iso3 = '---';
            $coun->numcode = '---';
            $coun->phonecode = '---';
            $coun->region_id = '4';
            $coun->save();
        }

        $countries = [ 'United States', 'Mexico', 'Canada', 'Guatemala', 'Cuba'];
        foreach ($countries as $key => $countrie) {
            $coun = new Country();
            $coun->name = $countrie;
            $coun->code = '---';
            $coun->nicename = '---';
            $coun->iso3 = '---';
            $coun->numcode = '---';
            $coun->phonecode = '---';
            $coun->region_id = '5';
            $coun->save();
        }

        $countries = [ 'Argentina', 'Bolivia', 'Brazil', 'Chile', 'Colombia'];
        foreach ($countries as $key => $countrie) {
            $coun = new Country();
            $coun->name = $countrie;
            $coun->code = '---';
            $coun->nicename = '---';
            $coun->iso3 = '---';
            $coun->numcode = '---';
            $coun->phonecode = '---';
            $coun->region_id = '6';
            $coun->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}