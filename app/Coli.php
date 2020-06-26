<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Coli extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'User_id',
        'categorie_id',
        'vilDepart',
        'vilArrive',
        'dateDepart',
        'dateArrive',
        'content',
        'kilo',
        'prix',
        'isCourrier',
        'isvalise',
        'photo',
        'published_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'User_id' => 'integer',
        'isCourrier' => 'boolean',
        'isvalise' => 'boolean',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dateDepart',
        'dateArrive',
        'published_at',
    ];
    protected $appends = ['date_depart','date_arrive','id'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function categorie()
    {
        return $this->belongsTo(\App\Categorie::class);
    }

    public function comments()
    {
        return $this->hasMany(\App\Comment::class);
    }
    public static  function dateFormat($date){
        return \Carbon\Carbon::parse($date)->format('d.m.Y');
    }
    public function getDateDepartAttribute($value){
        return Carbon::parse($value)->format('d.m.Y H:i');
    }
    public function getDateArriveAttribute($value){
        return Carbon::parse($value)->format('d.m.Y H:i');
    }
    public function getIdAttribute () {

        return route('packs.reservation',['user' => $this->attributes['User_id'] , 'pack' => $this->attributes['id'] ]);
    }
}
