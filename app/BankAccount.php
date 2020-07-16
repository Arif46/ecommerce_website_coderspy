<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    public function bankTransaction(){
        return $this->hasMany('App\BankTransaction');
    }
   
}
