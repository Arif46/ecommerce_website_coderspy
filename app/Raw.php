<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raw extends Model
{
   protected $fillable = ['raw_id','raw_name','serial_no','model','category_id','price','image','unit','vat','tax','supplier_id','supplier_price','description','active_status'];

   public function RawMaterialsDetails(){
   	return $this->hasMany(RawMaterialsDetails::class);
   }
    
}
