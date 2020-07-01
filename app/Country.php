<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function post()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
