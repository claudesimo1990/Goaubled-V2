<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded = [];

    protected $appends = ['dateFrom','dateTo','Path','createdAt'];

    public function getDateFromAttribute(){
        return Carbon::parse($this->attributes['dateFrom'])->format('d.m.Y H:i');
    }
    public function getDateToAttribute(){
        return Carbon::parse($this->attributes['dateTo'])->format('d.m.Y H:i');
    }
    public function getPathAttribute () {
    
        return route('post.booking',['post' => $this->attributes['id'], 'user' => $this->attributes['user_id'] ]);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getCreatedAtAttribute () {
        return $this->updated_at->diffForHumans();
    }
}