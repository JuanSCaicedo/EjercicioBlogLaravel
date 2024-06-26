<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    //Relacion una a muchos inversa
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    //Relacion uno a mucho polimorfica
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
    //Relacion muchos a muchos polimorfica
    public function posts()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
