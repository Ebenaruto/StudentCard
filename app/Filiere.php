<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $guarded = [];

    public function etudiant(){

        return $this->belongTo('App\Etudiant');
    }
}
