<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
  public function titulo(){
    return $this->hasMany('App\Titulo', 'genres_id');
  }
}
