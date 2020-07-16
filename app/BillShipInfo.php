<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillShipInfo extends Model
{
    protected $table = 'bill_ship_infos';
    protected $primaryKey = 'user_id';
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }
}
