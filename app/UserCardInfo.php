<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCardInfo extends Model
{
    protected $table = 'user_card_infos';
    protected $primaryKey = 'user_id';
    protected $fillable =[
        'user_id',
        'card_number',
        'payment_date',
        'card_holder',
        'cvc',
        'billing_zip'];

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }
}
