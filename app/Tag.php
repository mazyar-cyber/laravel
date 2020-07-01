<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=['name'];
    public function post()
    {
        return $this->morphedByMany(Post::class,"taggable");
    }
    public function videos()
    {
        return $this->morphedByMany(Video::class,"taggable");
    }

    public function giffs()
    {
        return $this->morphedByMany(Giff::class,"taggable");
    }
}
