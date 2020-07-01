<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
