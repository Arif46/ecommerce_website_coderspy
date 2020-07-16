<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseProduct extends Model
{
   public function PurchaseSubCategoryProductDetails(){
   	 return $this->hasMany(PurchaseSubCategoryProductDetails::class);
   }
}
