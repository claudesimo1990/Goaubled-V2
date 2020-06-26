<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    public $table = 'travels';
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
        'date_depart',
        'date_arrive',
        'content',
        'kiloAvalable',
        'prixKilo',
        'hasCourrier',
        'prixCourrier',
        'compagnie',
        'photoBielletAvion',
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
        'hasCourrier' => 'boolean',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date_depart',
        'date_arrive',
        'published_at',
    ];

    public function getFromDateAttribute($ok){
        return $this.self::CREATED_AT;
    }

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
    public function getDateDepartAttribute(){
        return Carbon::parse($this->attributes['date_depart'])->format('d.m.Y H:i');
    }
    public function getDateArriveAttribute(){
        return Carbon::parse($this->attributes['date_arrive'])->format('d.m.Y H:i');
    }
    public function getIdAttribute () {

        return route('travels.reservation',['user' => $this->attributes['User_id'] , 'travel' => $this->attributes['id'] ]);
    }
}
