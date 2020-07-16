<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SampleAndSubscription extends Model
{
    protected $guarded = [];

    public function subscriptionInfos(){
        return $this->hasMany(SampleAndSubscriptionInfo::class ,'subscription_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
