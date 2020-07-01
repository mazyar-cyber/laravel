<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = "posts";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photo()
    {
        return $this->morphMany(Photo::class, "imageable");
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, "taggable");
    }

    //accessor
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPathAttribute($value)
    {
        return '/image/post/'.$value;
    }
    //mutator
    public function setNameAttribute($value)
    {
        $this->attributes['name']=strtolower($value);
    }
}

