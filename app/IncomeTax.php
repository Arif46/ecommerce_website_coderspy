<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomeTax extends Model
{
      protected $fillable=[
        'start_amount',
        'end_amount',
        'tax_rate',
        'active_status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}
