<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class , 'created_by');
    }
    public function blogs(){
        return $this->hasMany(Blog::class,'category_id');
    }
}
