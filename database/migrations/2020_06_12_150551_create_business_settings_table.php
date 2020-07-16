<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type',30);
            $table->text('value');
            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        });

        $s= "INSERT INTO `business_settings` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
            (1, 'home_default_currency', '1', '2018-10-16 01:35:52', '2019-01-28 01:26:53'),
            (2, 'system_default_currency', '1', '2018-10-16 01:36:58', '2020-01-26 04:22:13'),
            (3, 'currency_format', '1', '2018-10-17 03:01:59', '2018-10-17 03:01:59'),
            (4, 'symbol_format', '1', '2018-10-17 03:01:59', '2019-01-20 02:10:55'),
            (5, 'no_of_decimals', '3', '2018-10-17 03:01:59', '2020-03-04 00:57:16'),
            (6, 'product_activation', '1', '2018-10-28 01:38:37', '2019-02-04 01:11:41'),
            (7, 'vendor_system_activation', '1', '2018-10-28 07:44:16', '2019-02-04 01:11:38'),
            (8, 'show_vendors', '1', '2018-10-28 07:44:47', '2019-02-04 01:11:13'),
            (9, 'paypal_payment', '0', '2018-10-28 07:45:16', '2019-01-31 05:09:10'),
            (10, 'stripe_payment', '0', '2018-10-28 07:45:47', '2018-11-14 01:51:51'),
            (11, 'cash_payment', '1', '2018-10-28 07:46:05', '2019-01-24 03:40:18'),
            (12, 'payumoney_payment', '0', '2018-10-28 07:46:27', '2019-03-05 05:41:36'),
            (13, 'best_selling', '1', '2018-12-24 08:13:44', '2019-02-14 05:29:13'),
            (14, 'paypal_sandbox', '0', '2019-01-16 12:44:18', '2019-01-16 12:44:18'),
            (15, 'sslcommerz_sandbox', '1', '2019-01-16 12:44:18', '2019-03-14 00:07:26'),
            (16, 'sslcommerz_payment', '0', '2019-01-24 09:39:07', '2019-01-29 06:13:46'),
            (17, 'vendor_commission', '20', '2019-01-31 06:18:04', '2019-04-13 06:49:26'),
            (18, 'verification_form', '[{\"type\":\"text\",\"label\":\"Your name\"},{\"type\":\"text\",\"label\":\"Shop name\"},{\"type\":\"text\",\"label\":\"Email\"},{\"type\":\"text\",\"label\":\"License No\"},{\"type\":\"text\",\"label\":\"Full Address\"},{\"type\":\"text\",\"label\":\"Phone Number\"},{\"type\":\"file\",\"label\":\"Tax Papers\"}]', '2019-02-03 11:36:58', '2019-02-16 06:14:42'),
            (19, 'google_analytics', '0', '2019-02-06 12:22:35', '2019-02-06 12:22:35'),
            (20, 'facebook_login', '1', '2019-02-07 12:51:59', '2019-02-08 19:41:15'),
            (21, 'google_login', '1', '2019-02-07 12:52:10', '2019-02-08 19:41:14'),
            (22, 'twitter_login', '1', '2019-02-07 12:52:20', '2019-02-08 02:32:56'),
            (23, 'payumoney_payment', '1', '2019-03-05 11:38:17', '2019-03-05 11:38:17'),
            (24, 'payumoney_sandbox', '1', '2019-03-05 11:38:17', '2019-03-05 05:39:18'),
            (36, 'facebook_chat', '0', '2019-04-15 11:45:04', '2019-04-15 11:45:04'),
            (37, 'email_verification', '0', '2019-04-30 07:30:07', '2019-04-30 07:30:07'),
            (38, 'wallet_system', '0', '2019-05-19 08:05:44', '2019-05-19 02:11:57'),
            (39, 'coupon_system', '0', '2019-06-11 09:46:18', '2019-06-11 09:46:18'),
            (40, 'current_version', '2.2', '2019-06-11 09:46:18', '2019-06-11 09:46:18'),
            (41, 'instamojo_payment', '0', '2019-07-06 09:58:03', '2019-07-06 09:58:03'),
            (42, 'instamojo_sandbox', '1', '2019-07-06 09:58:43', '2019-07-06 09:58:43'),
            (43, 'razorpay', '0', '2019-07-06 09:58:43', '2019-07-06 09:58:43'),
            (44, 'paystack', '0', '2019-07-21 13:00:38', '2019-07-21 13:00:38'),
            (45, 'pickup_point', '0', '2019-10-17 11:50:39', '2019-10-17 11:50:39'),
            (46, 'maintenance_mode', '0', '2019-10-17 11:51:04', '2019-10-17 11:51:04'),
            (47, 'voguepay', '0', '2019-10-17 11:51:24', '2019-10-17 11:51:24'),
            (48, 'voguepay_sandbox', '0', '2019-10-17 11:51:38', '2019-10-17 11:51:38'),
            (50, 'category_wise_commission', '0', '2020-01-21 07:22:47', '2020-01-21 07:22:47'),
            (51, 'conversation_system', '1', '2020-01-21 07:23:21', '2020-01-21 07:23:21'),
            (52, 'guest_checkout_active', '1', '2020-01-22 07:36:38', '2020-01-22 07:36:38'),
            (53, 'facebook_pixel', '0', '2020-01-22 11:43:58', '2020-01-22 11:43:58'),
            (54, 'linkedin_login', '1', '2019-02-07 12:52:20', '2019-02-08 02:32:56'),
            (55, 'instagram_login', '1', '2019-02-07 12:52:20', '2019-02-08 02:32:56'),
            (56, 'pinterest_login', '1', '2019-02-07 12:52:20', '2019-02-08 02:32:56')";

            DB::statement($s);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_settings');
    }
}