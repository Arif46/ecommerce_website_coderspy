<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyblendProduct extends Model
{
    protected $fillable=['id','user_id','product_id','created_at','updated_at'];

    public function product(){
        return $this->belongsTo(Product::class,'product_id')->select('id','name','slug','featured_img','unit_price');
    }
}
