<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model

{
   public function tuteurs(){
      return $this->belongs('App\Tuteurs');
   }

   public function filieres(){
      return $this->belongs('App\Filieres');
   }
 
}

