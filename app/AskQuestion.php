<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AskQuestion extends Model
{
    protected $fillable=['question_title','message'];
}
