<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MiddleNote extends Model
{
    public function products(){

        return $this->belongsToMany(Product::class)->select(['name','thumbnail_img','slug','product_id']);
    }

    public function category(){
  	return $this->belongsTo(NotesCategory::class);
  }
}
