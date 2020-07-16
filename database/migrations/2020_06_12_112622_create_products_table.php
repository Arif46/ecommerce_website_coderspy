<?php

use App\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->nullable();
            $table->string('added_by', 50)->default('admin');
            $table->integer('user_id')->default(1)->nullable();
            $table->integer('brand_id')->default(1)->nullable();
            $table->integer('category_id')->default(1)->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->integer('subsubcategory_id')->nullable();
            $table->string('product_code')->nullable();
            $table->string('barcode', 200)->nullable();
            $table->string('gender', 100)->nullable();
            $table->date('launch_date')->nullable();
            $table->float('alcohol')->nullable()->comment('Alcohol By Volume in Percentage');


            $table->double('unit_price')->nullable()->comment('Product Selling Price USD');
            $table->double('purchase_price')->nullable()->comment('Product Listing Price USD');
            $table->double('rebate')->nullable()->comment('Product Rebate 20%')->default(20);
            $table->double('market_price')->nullable()->comment('Product Market Price USD');
            $table->integer('perfumer_id')->default(1)->nullable();
            $table->double('capacity')->nullable()->comment('Product capacity in ml');


            $table->string('uom', 255)->comment('Unit of Measument (UOM)');
            $table->float('poduct_length')->nullable()->comment('Product Lngth in cm');
            $table->float('product_height')->nullable()->comment('Product Height in cm');
            $table->float('product_width')->nullable()->comment('Product Width in cm');
            $table->string('pack_type', 100)->nullable();
            $table->double('uom_quantity')->comment('UOM (Unit of Measument) QTY (Quantity) PC (Piece)/GMS(grams)');

            $table->text('description')->nullable()->comment('Product Description');
            $table->text('marketting')->nullable()->comment('Product Marketing');
            $table->string('country_id')->nullable()->comment('Country of Origin');
            $table->tinyInteger('subscription')->default('0');
            $table->float('subcription_price')->nullable()->comment('Subscription Price USD');
            $table->tinyInteger('sample')->default('0');
            $table->string('frag_family', 191)->nullable();
            $table->string('frag_type', 191)->nullable()->comment('Fragrance Type/Concentration  (Parfum, Eau De Parfum (EDP), Eau De Toilette (EDT), Eau De Cologne (EDC), Eau Fraiche');
            $table->string('top_notes', 191)->nullable();
            $table->string('middle_notes', 191)->nullable();
            $table->string('base_notes', 191)->nullable();


            $table->string('photos', 2000)->nullable();
            $table->string('thumbnail_img', 100)->nullable();
            $table->string('featured_img', 100)->nullable();
            $table->string('flash_deal_img', 100)->nullable();
            $table->string('video_provider', 20)->nullable();
            $table->string('video_link', 100)->nullable();
            $table->integer('variant_product')->default(0);
            $table->text('tags')->nullable();



            $table->string('attributes', 1000)->default();
            $table->text('choice_options');
            $table->text('colors');
            $table->text('variations');
            $table->integer('todays_deal')->default('0');
            $table->integer('featured')->default('0');
            $table->integer('current_stock')->default(100);
            $table->string('unit', 20)->nullable();
            $table->double('discount')->nullable();
            $table->string('discount_type', 10)->nullable();
            $table->double('tax')->nullable();
            $table->string('tax_type', 10)->nullable();
            $table->string('shipping_type', 20)->default('flat_rate');
            $table->double('shipping_cost')->nullable();
            $table->integer('num_of_sale')->default(0)->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_img')->nullable();
            $table->string('pdf')->nullable();
            $table->text('slug')->nullable();
            $table->double('rating')->nullable();


            $table->tinyInteger('sa1le')->default('0');

            $table->tinyInteger('published')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->boolean('is_accessories')->default(false);
            $table->integer('created_by')->nullable()->default(1);
            $table->integer('updated_by')->nullable()->default(1);
            $table->timestamps();
        });

        $faker = Faker\Factory::create();
        $product=1;
        for ($i = 1; $i <= 6; $i++) {
            
            for ($j = 1; $j <= 6; $j++) {
                $s = new Product();
                $name = $faker->sentence($nbWords = 2, $variableNbWords = true);
                $s->name = $name;
                $s->added_by = 'admin';
                $s->user_id = 1;
                $s->category_id = $i;
                $s->brand_id = $j;
                
                
                $s->photos = '["website/img/product_images/' . $product . '.jpg","website/img/product_images/' . $product . '.jpg","website/img/product_images/' . $product . '.jpg"]';
                // $s->photos = 'website/img/product_images/' . $product . '.jpg';
                $s->thumbnail_img = 'website/img/product_images/' . $product . '.jpg';
                $s->featured_img = 'website/img/product_images/' . $product . '.jpg';
                $s->flash_deal_img = 'website/img/product_images/' . $product . '.jpg';

                $product ++;
                
                $s->video_provider = 'youtube';
                $s->video_link = '';
                $s->tags = 'products';
                $s->description = $faker->sentence($nbWords = 200, $variableNbWords = true);
                $s->unit_price = 100 + rand() % 1000;
                $s->purchase_price = 100 + rand() % 1000;
                $s->variant_product = 100 + rand() % 1000;
                $s->attributes = '';
                $s->choice_options = '';
                $s->colors = '[\"#b02626\",\"#ff0000\"]';
                $s->variations = '';
                $s->current_stock = 100;
                $s->unit = '';
                $s->discount = '';
                $s->discount_type = '';
                $s->tax = '';
                $s->tax_type = '';
                $s->shipping_cost = 100;
                $s->meta_title = $faker->sentence($nbWords = 10, $variableNbWords = true);
                $s->meta_description = $faker->sentence($nbWords = 100, $variableNbWords = true);
                $s->meta_img = '';
                $s->slug = str_replace(' ', '-', $name);
                $s->rating = '';
                $s->barcode = 1000 + rand() % 1000;
                $s->perfumer_id = $j;
                $s->rebate = '';
                $s->capacity = '';
                $s->gender = 'Male';
                $s->sample = 1;
                $s->marketting = '';
                $s->subscription = 1;
                $s->published = 1;
                $s->subcription_price = 100 + rand() % 1000;
                $s->frag_family = '';
                $s->frag_type = '';
                $s->top_notes = '[\"top,notes\"]';
                $s->middle_notes = '[\"middle,notes\"]';
                $s->base_notes = '[\"base,nots\"]';
                $s->alcohol = '';
                $s->poduct_length = 67.9;
                $s->product_height = 67.9;
                $s->product_width = 67.9;
                $s->pack_type = 'Polithin';
                $s->uom = '';
                $s->launch_date = date('Y-m-d');
                $s->save();
            }
        }


        // $faker = Faker\Factory::create();
        // for ($i = 1; $i <= 10; $i++) {
        //     $s = new Product();
        //     $name = $faker->sentence($nbWords = 2, $variableNbWords = true);
        //     $s->name = $name;
        //     $s->added_by = 'admin';
        //     $s->user_id = 1;
        //     $s->category_id = 1 + $i % 5;
        //     $s->subcategory_id = $i;
        //     $s->brand_id = $i;
        //     $name1 = $i;
        //     $name2 = $i + 1;
        //     $name3 = $i + 2;
        //     $s->photos = '["uploads/products/photos/' . $name2 . '.png","uploads/produts/photos/' . $name1 . '.png","uploads/produts/photos/' . $name3 . '.png"]';
        //     $s->thumbnail_img = 'uploads/products/photos/products/' . $i . '.png';
        //     $s->featured_img = 'uploads/products/photos/' . $i . '.png';
        //     $s->flash_deal_img = 'uploads/products/photos/' . $i . '.png';
        //     $s->video_provider = 'youtube';
        //     $s->video_link = '';
        //     $s->tags = 'products';
        //     $s->description = $faker->sentence($nbWords = 200, $variableNbWords = true);
        //     $s->unit_price = 100 + rand() % 1000;
        //     $s->purchase_price = 100 + rand() % 1000;
        //     $s->variant_product = 100 + rand() % 1000;
        //     $s->attributes = '';
        //     $s->choice_options = '';
        //     $s->colors = '[\"#b02626\",\"#ff0000\"]';
        //     $s->variations = '';
        //     $s->current_stock = 100;
        //     $s->unit = '';
        //     $s->discount = '';
        //     $s->discount_type = '';
        //     $s->tax = '';
        //     $s->tax_type = '';
        //     $s->shipping_cost = 100;
        //     $s->meta_title = $faker->sentence($nbWords = 10, $variableNbWords = true);
        //     $s->meta_description = $faker->sentence($nbWords = 100, $variableNbWords = true);
        //     $s->meta_img = '';
        //     $s->slug = str_replace(' ', '-', $name);
        //     $s->rating = '';
        //     $s->barcode = 1000 + rand() % 1000;
        //     $s->perfumer_id = $i;
        //     $s->rebate = '';
        //     $s->capacity = '';
        //     $s->gender = 'Male';
        //     $s->sample = 1;
        //     $s->marketting = '';
        //     $s->subscription = 1;
        //     $s->published = 1;
        //     $s->subcription_price = 100 + rand() % 1000;
        //     $s->frag_family = '';
        //     $s->frag_type = '';
        //     $s->top_notes = '[\"top,notes\"]';
        //     $s->middle_notes = '[\"middle,notes\"]';
        //     $s->base_notes = '[\"base,nots\"]';
        //     $s->alcohol = '';
        //     $s->poduct_length = 67.9;
        //     $s->product_height = 67.9;
        //     $s->product_width = 67.9;
        //     $s->pack_type = 'Polithin';
        //     $s->uom = '';
        //     $s->launch_date = date('Y-m-d');
        //     $s->save();
        // }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}