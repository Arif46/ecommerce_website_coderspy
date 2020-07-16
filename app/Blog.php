<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded=[];

    public function blogCategory(){
        return $this->belongsTo(BlogCategory::class , 'category_id');
    }
    public function user(){
        return $this->belongsTo(User::class , 'created_by');
    }

}
