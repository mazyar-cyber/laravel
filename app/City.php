<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function post()
    {
        return $this->hasManyThrough(Post::class, User::class,"city_id");
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
