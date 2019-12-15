<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
  public function peliculas(){
    return $this->hasMany('App\Pelicula', 'generos_id');
  }
}
