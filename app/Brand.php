<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $fillable=[
        'name', 'logo', 'img', 'top', 'slug', 'meta_title', 'meta_description', 'country', 'brands_activity', 'brands_parent_company', 'about', 'website', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];

    public function products(){

        return $this->hasMany(Product::class);
    }
}
