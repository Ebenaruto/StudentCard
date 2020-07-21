<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model

{
   public function tuteurs(){
      return $this->belongs('App\Tuteurs');
   }

   public function cycles(){
      return $this->belongs('App\Cycles');
   }

   public function filieres(){
      return $this->belongs('App\Filieres');
   }

   public function niveaux(){
      return $this->belongs('App\Niveaux');
   }

   public function nationalites(){
      return $this->belongs('App\Nationalites');
   }
 
 
}

