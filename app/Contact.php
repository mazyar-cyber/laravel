<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $table = "contact";

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function post()
    {
        $this->hasOne(Post::class, 'post_id');
    }

    //Accessor:
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    //mutator
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    public function getPathAttribute($value)
    {
        return '/image/'.$value;
    }
}
