<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Basket extends Model
{
    use SoftDeletes;

    protected $dates = ["deleted_at"];
    protected $table = "basket";
    protected $fillable = ['text', 'email'];

    //Accessor:
    public function getTextAttribute($value)
    {
        return ucfirst($value);
    }

    //mutator:
    public function setTextAttribute($value)
    {
        $this->attributes['text'] = strtolower($value);
    }
}

