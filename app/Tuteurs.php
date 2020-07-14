<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuteurs extends Model
{
    public function etudiants(){
        return $this->belongsToMany('App\Etudiants');
     }
}
