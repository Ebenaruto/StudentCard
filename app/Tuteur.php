<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    protected $guarded = [];

    public function etudiant(){

        return $this->belongTo('App\Etudiant');
    }
}
