<?php

use App\About;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ultra_beauty_image')->nullable();
            $table->string('mission_title')->nullable();
            $table->text('mission_text')->nullable();
            $table->string('vision_title')->nullable();
            $table->text('vision_text')->nullable();
            $table->string('value_title')->nullable();
            $table->text('value_text')->nullable();
            $table->string('mission_img1')->nullable();
            $table->string('mission_img2')->nullable();

            $table->text('story_text')->nullable();
            $table->string('story_img1')->nullable();
            $table->string('story_title1')->nullable();
            $table->text('story_text1')->nullable();
            $table->string('story_img2')->nullable();
            $table->string('story_title2')->nullable();
            $table->text('story_text2')->nullable();
            $table->string('story_img3')->nullable();
            $table->string('story_title3')->nullable();
            $table->text('story_text3')->nullable();
            $table->string('story_img4')->nullable();
            $table->string('story_title4')->nullable();
            $table->text('story_text4')->nullable();
            
            $table->text('guest_text')->nullable();
            $table->string('guest_img1')->nullable();
            $table->string('guest_img2')->nullable();
            $table->string('guest_img3')->nullable();

            $table->text('associate_text')->nullable();
            $table->string('associate_img1')->nullable();
            $table->string('associate_img2')->nullable();
            $table->string('associate_img3')->nullable();
            $table->string('associate_img4')->nullable();
            $table->string('associate_img5')->nullable();
            $table->string('associate_img6')->nullable();
            $table->string('associate_img7')->nullable();

            $table->text('communitie_text')->nullable();
            $table->string('communitie_img1')->nullable();
            $table->string('communitie_img2')->nullable();
            $table->text('communitie_text2')->nullable();
            $table->string('communitie_img3')->nullable();
            $table->string('communitie_img4')->nullable();
            $table->string('communitie_img5')->nullable();
            $table->string('communitie_img6')->nullable();
            $table->text('communitie_text3')->nullable();
            $table->string('communitie_img7')->nullable();
            $table->string('communitie_text4')->nullable();

            $table->text('environment_text')->nullable();
            $table->text('partner_text')->nullable();
            $table->text('charity_text')->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });


        $about =new About();
        $about->ultra_beauty_image='public/website/img/about/about_menu.jpg';
        $about->mission_title='Our Mission';
        $about->mission_text='Every day, we use the power of beauty to bring to life the possibilities that lie within each of us—inspiring every guest and enabling each associate to build a fulfilling career.';
        $about->vision_title='Our Vision';
        $about->vision_text='To be the most loved beauty destination of our guests and the most admired retailer by our Ulta Beauty associates, communities, partners and investors.';
        $about->value_title='Our Values';
        $about->value_text='We work toward our mission and vision with our values at the heart of everything we do.';
        $about->mission_img1='public/website/img/about/mission1.jpg';
        $about->mission_img2='public/website/img/about/mission2.jpg';

        $about->story_text='At Ulta Beauty, we have been visionaries since day one. Seeing possibilities is what we did when we first created All Things Beauty, All in One Place™ — a store experience that connected with how beauty lovers actually shopped. And it forever changed the game.';
        $about->story_img1='public/website/img/about/our-story1.jpg';
        $about->story_title1='Store Growth';
        $about->story_text1='Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.';
        $about->story_img2='public/website/img/about/our-story2.jpg';
        $about->story_title2='Limitless Assortment';
        $about->story_text2='You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.';
        $about->story_img3='public/website/img/about/our-story3.jpg';
        $about->story_title3='Personalized Services';
        $about->story_text3='We offer the total beauty experience in store. Our licensed professional stylists customize hair, skin, brow and makeup services to fit our guests’ needs and preferences.';
        $about->story_img4='public/website/img/about/our-story4.jpg';
        $about->story_title4='Ultamate Rewards';
        $about->story_text4='Our industry-leading loyalty program boasts more than 33 million Ultamate Rewards Members and counting. Whether our members spend on products or services, we show them that beauty loves them back.';

        $about->guest_text='Pretty possibilities. Ulta Beauty is committed to offering our guests unrivaled ways to be beautiful in an environment that provides the thrill of exploration and the delight of discovery.

Look, shop, play—reward yourself! With our free Ultamate Rewards loyalty program, guests sign up and earn points for every dollar spent on products, beauty services and at ulta.com—then put those points toward future in-store or online purchases. They also get exclusive offers, discounts and even a free birthday gift. It is our way of showing how beauty loves them back.';
        $about->guest_img1='public/website/img/about/our-guests-quote-1.jpg';
        $about->guest_img2='public/website/img/about/our-guests-quote-1.jpg';
        $about->guest_img3='public/website/img/about/our-guests-quote-1.jpg';

        $about->associate_text='Ulta Beauty is devoted to creating career opportunities that foster peak performance, reflect the diversity of the community, support work/life balance and empower associates to “wow” our guests.';
        $about->associate_img1='public/website/img/about/our-associates-hero-new.jpg';
        $about->associate_img2='public/website/img/about/our-story-stat-1.jpg';
        $about->associate_img3='public/website/img/about/our-story-stat-2.jpg';
        $about->associate_img4='public/website/img/about/our-story-stat-3.jpg';
        $about->associate_img5='public/website/img/about/associate-quote-1.jpg';
        $about->associate_img6='public/website/img/about/associate-quote-2.jpg';
        $about->associate_img7='public/website/img/about/associate-quote-3.jpg';

        $about->communitie_text='We give our all. We proudly support our local communities by creating new jobs across the country and investing in areas of interest to women such as breast cancer research, education and job training.';
        $about->communitie_img1='public/website/img/about/hero-communities.jpg';
        $about->communitie_img2='public/website/img/about/bcrf.gif';
        $about->communitie_text2='Ulta Beauty is among the top corporate partners of the Breast Cancer Research Foundation® (BCRF), a nonprofit organization committed to achieving prevention and a cure for breast cancer.

Since 2009, our signature fundraising events, which raise money from guests, associates and partners, has generated a total contribution of more than $33 million, used to fund more than 660,000 research hours.';
        $about->communitie_img3='public/website/img/about/mbiblowit.jpg';
        $about->communitie_img4='public/website/img/about/communities-1.jpg';
        $about->communitie_img5='public/website/img/about/communities-2.jpg';
        $about->communitie_img6='public/website/img/about/ulta-charity-new.gif';
        $about->communitie_text3='The Ulta Beauty Charitable Foundation (UBCF) is committed to enhancing the education and well-being of women and their families throughout our communities. In addition to giving time, our associates are generous with their own money. Associates have the option to enroll in a payroll deduction program to further support the impact they and UBCF can have on our communities. In 2017, we launched an Associate Relief Program to provide financial grants to associates facing hardship.

Since 2009, our signature fundraising events, which raise money from guests, associates and partners, has generated a total contribution of more than $33 million, used to fund more than 660,000 research hours.';
        $about->communitie_img7='public/website/img/about/dress-for-success-new.gif';
        $about->communitie_text4='In 2017, Ulta Beauty established a national partnership with Dress for Success®, an international, not-for-profit organization that empowers women to achieve economic independence by providing a network of support, professional attire and the development tools to help women thrive in work and in life. The partnership includes financial support and Ulta Beauty Collection product to help women look and feel their best.

Since 2009, our signature fundraising events, which raise money from guests, associates and partners, has generated a total contribution of more than $33 million, used to fund more than 660,000 research hours.

We support the continuum of services program at 27 local affiliates to give more than 40,000 women the tools they need to build long-term careers. Associates show support for women and families by volunteering to sort and merchandise the Dress for Success suiting boutiques, collect clothing accessories and provide tips on applying professional makeup.';

        $about->environment_text='Globally minded:As a company, Ulta Beauty works to operate in an environmentally responsible manner and has been implementing sustainability initiatives in our stores, distribution centers and corporate offices. We have a dedicated Corporate Energy Team that focuses on managing our energy use wisely and conserving resourceThrough our energy management program, Ulta Beauty has reduced our comparable store electric consumption during the last three years by over 5 million kWh, which is equivalent to reducing more than 3,700 metric tons of GHG emissions. And in 2018, Ulta Beauty stores and distribution centers recycled a total of more than 13,200 tons of cardboard and plastic shrink wrap. Learn More About Our Commitment To The Environment';
        $about->partner_text='All in this together. Ulta Beauty offers our partners opportunities to significantly grow brands and services. We strive always to deliver on our promises and operate ethically with them..

Our business is supported by a network of third parties, including suppliers, vendors and other business partners. We select our partners carefully and only conduct business with organizations that are committed to conducting business ethically.

We carefully select partners that manufacture the Ulta Beauty Collection. All Ulta Beauty Collection products are California Prop 65 compliant and in addition to the stricter rigor of Prop 65, the Ulta Beauty Collection has compiled a “Do Not Use” list included with all new product briefs which goes beyond current regulatory standards. Are you a brand interested in having your products sold at Ulta Beauty? Please visit Merchandising Submissions to learn more.';
        $about->charity_text='The Ulta Beauty team delivered outstanding results in 2018, driving record sales and profits while making significant progress against our strategic imperatives and investing to drive market share gains and create sustainable long term shareholder value..

In 2020, sales increased 14.1%, or 16.3% adjusted for the 53rd week in 2017, to $6.7 billion. Total company comparable sales rose 8.1%, driven primarily by strong traffic. GAAP earnings per diluted share grew 22.1% to $10.94.

Our Board of Directors oversees an enterprise-wide approach to risk management, designed to support the achievement of organizational objectives, including strategic objectives, to improve long-term organizational performance and enhance stockholder value. .

Our Board of Directors consists of eleven directors, 55% of whom are female. Board member independence is an essential element of Ulta Beauty corporate governance. The Board of Directors has determined that each of the current non-employee directors is free of any relationship that would interfere with his or her individual exercise of independent judgement with regard to Ulta Beauty. We currently separate the roles of Chief Executive Officer and Chairperson of the Board. Our Board is led by an independent, non-executive Chairperson.';
        $about->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}