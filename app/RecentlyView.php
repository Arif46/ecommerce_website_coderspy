<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecentlyView extends Model
{
    protected $guarded=[];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

}
