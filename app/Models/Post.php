<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relacion una a muchos inversa
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function categorias()
    {
        return $this->belongsTo('App\Models\Categoria');
    }
}
