<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('frontend_color')->nullable();
            $table->string('logo')->nullable();
            $table->string('admin_logo')->nullable();
            $table->string('admin_login_background')->nullable();
            $table->string('admin_login_sidebar')->nullable();

            $table->string('favicon')->nullable();
            $table->string('site_name')->nullable();
            $table->string('address')->nullable();


            $table->string('description')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('linkedin')->nullable();

            $table->string('pinterest')->nullable();
            $table->string('snapchart')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('subs_head')->nullable();
            $table->string('subs_middle')->nullable();
            $table->string('subs_bottom')->nullable();

            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        }); 

        $s= "INSERT INTO `general_settings` (`id`, `frontend_color`, `logo`, `admin_logo`, `admin_login_background`, `admin_login_sidebar`, `favicon`, `site_name`, `address`, `description`, `phone`, `email`, `facebook`, `instagram`, `twitter`, `youtube`, `google_plus`, `linkedin`, `pinterest`, `snapchart`, `tiktok`, `subs_head`, `subs_middle`, `subs_bottom`, `created_at`, `updated_at`) VALUES
(1, '3', 'uploads/logo/hkSzY3JQR95ZM2xzBVKyVg5Yzy1i2ueXQSFDFA8j.png', 'uploads/admin_logo/wCgHrz0Q5QoL1yu4vdrNnQIr4uGuNL48CXfcxOuS.png', 'uploads/admin_login_background/mwSGBw5V7UcYJYZIHK3quGzfPoJFDrU457sdctZN.png', 'uploads/admin_login_sidebar/POZZJIyRh1iVjcvo1EFjQ9kqc8kDvj7cipra06rX.png', 'uploads/favicon/uHdGidSaRVzvPgDj6JFtntMqzJkwDk9659233jrb.png', 'myfragranceme', 'myfragranceme', 'Active eCommerce CMS is a Multi vendor system is such a platform to build a border less marketplace.', '01910077628', 'jmrashed@gmail.com', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.twitter.com', 'https://www.youtube.com', 'https://www.googleplus.com', 'https://www.linkedin.com', 'https://www.pinterest.com', 'https://www.snapchart.com', 'https://www.tiktok.com', 'Join with us. Subscribe to our mailing list', 'Be the first to know about our latest news , trends and offers straight your inbox.', 'We Will Never ever share your contact details with anyone', '2020-06-04 06:25:18', '2020-06-04 00:25:18')";
        DB::statement($s);

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_settings');
    }
}