<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
  public function peliculas(){
    return $this->hasMany('App\Peliculas', 'generos_id');
  }
}
