<?php

use App\CareerPosition;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->text('details')->nullable();
            $table->tinyInteger('active_status')->nullable()->default(1);
            $table->timestamps();
        });
        $s = [
            'Overseas Business Development / Export Manager', 
            'Marketing Manager / Executive',
            'Accounts Manager',
            'Public Relations Officer',
            'Laboratory In-Charge (Urgent Hire)',
            'Quality Control Analyst / Chemist',
            'Inventory Clerk', 
        ];
        foreach ($s as $key => $value) {
            $career_positions = new CareerPosition();
            $career_positions->title = $value;
            $career_positions->details = '<h4 class="mt-20" style="box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 20px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">Overview</h4><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">A vacancy has arisen for a suitably qualified and experienced Marketing Manager, to be responsible for managing the entire marketing function of the company and the following:</p><ol style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><li style="box-sizing: border-box; list-style: none;">Negotiating pricing, and successfully closing sales on all available target market opportunities</li><li style="box-sizing: border-box; list-style: none;">Proactively promoting and selling the products.</li><li style="box-sizing: border-box; list-style: none;">Gathering actionable market insights through customer interaction and market research.</li><li style="box-sizing: border-box; list-style: none;">Handling the end-to-end customer relationship including pitching, negotiation, contracting, invoicing and payment collection, result tracking and trouble shooting</li><li style="box-sizing: border-box; list-style: none;">Product selection, presentation and promotional planning for revenue growth</li><li style="box-sizing: border-box; list-style: none;">Good business judgment, prioritization, focus and ability to make decisions while working in a highly charged environment</li><li style="box-sizing: border-box; list-style: none;">Actively seeking new accounts, opportunities and business</li><li style="box-sizing: border-box; list-style: none;">Build strong and lasting customer relationships</li><li style="box-sizing: border-box; list-style: none;">Efficiently and effectively meet and surpass assigned sales targets</li><li style="box-sizing: border-box; list-style: none;">Effectively and efficiently manage responsibilities in-office (Inside Sales) and on field customer visits</li></ol><h4 class="mt-20" style="box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 20px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">Job Requirements:</h4><ul class="jobs_requiremnts" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 5px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><li style="box-sizing: border-box; list-style: none; padding-left: 25px;">Minimum Bachelors’ degree in a commercial discipline</li><li style="box-sizing: border-box; list-style: none; padding-left: 25px;">5 – 10 years work experience in the export of perfumery / cosmetics products.</li><li style="box-sizing: border-box; list-style: none; padding-left: 25px;">Knowledge of the global perfume markets</li><li style="box-sizing: border-box; list-style: none; padding-left: 25px;">Fluent English-speaking kills; additional languages will be considered favourably</li><li style="box-sizing: border-box; list-style: none; padding-left: 25px;">UAE Driver’s License would be a distinct advantage.</li></ul><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">A vacancy has arisen for a suitably qualified and experienced Marketing Manager, to be responsible for managing the entire marketing function of the company and the following:</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">Candidates meeting the above criteria need to email their CVs to jobs(a)alharamainperfumes.com for consideration, applications must have latest colour photo attached.</p><br>';
            $career_positions->save();
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_positions');
    }
}