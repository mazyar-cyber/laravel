<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

//use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

//    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email_verified_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withPivot('created_at', 'updated_at');;
    }

    public function work()
    {
        return $this->belongsToMany(Work::class);
    }

    public function city()
    {
        return $this->belongsToMany(City::class);
    }

    public function photo()
    {
        return $this->morphMany(Photo::class, "imageable");
    }

    public function contact()
    {
        return $this->hasMany(Contact::class);
    }

    public function isAdmin($newrole)
    {
        foreach ($this->roles as $role) {
            if ($role->name == $newrole) {
                return true;
            }
        }
        return false;
//        if ($this->roles->find(5)) {
//            return true;
//        } else {
//            return false;
//        }
    }

    public function isDirector()
    {
        foreach ($this->roles as $role) {
            if ($role->name == "directore") {
                return true;
            }
            return false;
        }
    }
}
