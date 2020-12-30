<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class House extends Model
{
    use HasFactory;
    const BORRADOR = 1;
    const PUBLICADO = 2; 

    //Relacion uno a muchos inversa
    public function creator(){
        return $this->BelongsTo('App\Models\User');
    }

    //Relacion uno muchos
    public function features(){
        return $this->hasMany('App\Models\Feature');
    }

    //Relacion uno a uno
    public function price(){
        return $this->belongsTo('App\Models\Price');
    }

    //Relacion polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }
    
}
