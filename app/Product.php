<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','added_by', 'user_id', 'category_id', 'subcategory_id','featured_img', 'subsubcategory_id', 'brand_id', 'video_provider', 'video_link', 'unit_price',
        'purchase_price', 'unit', 'slug', 'colors', 'choice_options', 'variations', 'current_stock'
      ];

    protected $casts = ['colors' => 'object'];

    public function category(){
    	return $this->belongsTo(Category::class,'category_id');
    }
    public function perfumer(){
        return $this->belongsTo(Perfume::class,'perfumer_id');
    }

    public function subcategory(){
    	return $this->belongsTo(SubCategory::class);
    }

    public function subsubcategory(){
    	return $this->belongsTo(SubSubCategory::class);
    }

    public function brand(){
    	return $this->belongsTo(Brand::class)->select('name','id');
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function orderDetails(){
    return $this->hasMany(OrderDetail::class);
    }

    public function reviews(){
    return $this->hasMany(Review::class)->where('status', 1);
    }

    public function wishlists(){
    return $this->hasMany(Wishlist::class);
    }

    public function comparelists(){
    return $this->hasMany(CompareList::class);
    }
    public function recentlyViewed(){
    return $this->hasMany(RecentlyView::class);
    }
    public function myblends(){
    return $this->hasMany(MyblendProduct::class);
    }

    public function stocks(){
    return $this->hasMany(ProductStock::class);
    }

    public function baseNotes()
    {
        return $this->belongsToMany(BaseNote::class);
    }

    public function topNotes()
    {
        return $this->belongsToMany(TopNote::class);
    }

    public function midNotes()
    {
        return $this->belongsToMany(MiddleNote::class);
    }

    public function SampleAndSubscriptionInfos(){
        return $this->hasMany(SampleAndSubscriptionInfo::class,'product_id','id');
    }

    public function tempQueueList(){
        return $this->hasMany('App\TempQueueList');
    }

    public function subscriptionQueue(){
        return $this->hasMany('App\SubscriptionQueue');
    }
}
