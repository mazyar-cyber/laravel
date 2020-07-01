<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = "product_tbl";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //accessor
    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPathAttribute($value)
    {
        return $value = '/image/product/' . $value  ;
    }

    //mutator
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }
}
