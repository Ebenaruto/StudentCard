<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuteurs extends Model
{
    protected $guarded=[];
    public function etudiants(){
        return $this->hasMany('App\Etudiants');
     }
}
