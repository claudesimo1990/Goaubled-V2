<?php

namespace App;

use App\Coli;
use App\Travel;
use App\Comment;
use App\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

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
    /**
     * dates
     *
     * @var array
     */
    protected $dates = [
        'email_verified_at',
    ];

    
    /**
     * profile
     *
     * @return void
     */
    public function profile()
    {
        return $this->hasOne(\App\Profile::class);
    }
    
    /**
     * colis
     *
     * @return void
     */
    public function colis()
    {
        return $this->hasMany(\App\Coli::class);
    }
    
    /**
     * travels
     *
     * @return void
     */
    public function travels()
    {
        return $this->hasMany(\App\Travel::class);
    }
    
    /**
     * comments
     *
     * @return void
     */
    public function comments()
    {
        return $this->hasMany(\App\Comment::class);
    }
    
    /**
     * getAvatarAttribute
     *
     * @return void
     */
    public function getAvatarPathAttribute()
    {
        return Storage::disk('public');
    }
}
