<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function house(){
        return $this->belongsTo('App\Models\House');
    }
}
