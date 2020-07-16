<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawCategory extends Model
{
    protected $fillable = ['name','active_status','created_by','updated_by'];
}
