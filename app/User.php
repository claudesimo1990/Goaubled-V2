<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'google_id',
        'facebbook_id',
        'avatar',
        'avatar_original',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'email_verified_at',
    ];


    public function profile()
    {
        return $this->hasOne(\App\Profile::class);
    }

    public function colis()
    {
        return $this->hasMany(\App\Coli::class);
    }

    public function travels()
    {
        return $this->hasMany(\App\Travel::class);
    }

    public function comments()
    {
        return $this->hasMany(\App\Comment::class);
    }
}
