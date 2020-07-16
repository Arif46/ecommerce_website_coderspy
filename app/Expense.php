<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Expense extends Model
{
    protected $guarded=[];
    public static function boot()
    {
        parent::boot();
        if(!App::runningInConsole())
        {
            static::creating(function ($model)
            {
                $model->fill([
                    'created_by' => auth()->id(),
                    'updated_by' => auth()->id(),
                ]);
            });
            static::updating(function ($model)
            {
                $model->fill([
                    'updated_by' => auth()->id(),
                ]);
            });
        }
    }
    public function expense_category(){
        return $this->belongsTo(ExpenseCategory::class,'category_id');
    }
    public function expense_subcategory(){
        return $this->belongsTo(ExpenseSubCategory::class,'sub_category_id');
    }
}
