<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class geners extends Model
{
  public function products(){
    return $this->hasMany('App\Peliculas', 'Genres_id');
  }
}
