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
        'dateDepart',
        'dateArrive',
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
        'dateDepart',
        'dateArrive',
        'published_at',
    ];

    public function getFromDateAttribute($ok){
        return $this.self::CREATED_AT;
    }

    protected $appends = ['date_depart','date_arrive'];

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
    public static function dateFormat($date){
        return Carbon::parse($date)->format('d.m.Y H:i');
    }
    public function getDateDepartAttribute($value){
        return Carbon::parse($value)->format('d.m.Y H:i');
    }
    public function getDateArriveAttribute($value){
        return Carbon::parse($value)->format('d.m.Y H:i');
    }
}
