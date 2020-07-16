<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SampleAndSubscriptionInfo extends Model
{
    protected $guarded=['*'];

    public function subscription(){
        return $this->belongsTo(SampleAndSubscription::class);
    }
    public function product(){
        return $this->belongsTo(Product::class,'product_id')->select(['id','name','featured_img','unit_price']);
    }
}
