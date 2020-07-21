<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveaux extends Model
{
    protected $guarded=[];

    public function etudiants(){
        return $this->hasMany('App\Etudiants');
     }
}
