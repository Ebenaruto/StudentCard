<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $guarded = [];

public function cycle(){

    return $this->hasMany('App\Cycle');
}

public function filiere(){

    return $this->hasMany('App\Filiere');
}

public function niveau(){

    return $this->hasMany('App\Niveau');
}

public function tuteur(){

    return $this->hasMany('App\Tuteur');
}


}
