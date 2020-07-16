<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    protected $fillable=[
        'name',
        'img',
        'position',
        'company',
        'country',
        'education',
        'website',
        'about',
        'number_database',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

    public function products(){

        return $this->hasMany(Product::class,'perfumer_id','id');
    }
}
