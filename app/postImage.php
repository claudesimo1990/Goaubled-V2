<?php

namespace App;

use App\Post as PostAlias;

use Illuminate\Database\Eloquent\Model;

class postImage extends Model
{
    protected $guarded;

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
