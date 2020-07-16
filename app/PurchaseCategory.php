<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseCategory extends Model
{
    public function subcategories(){
    	return $this->hasMany(SubCategory::class);
    }
}
