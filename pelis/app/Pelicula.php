<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $guarded = [];

    public function user(){
      return $this->belongsTo('App\User', 'user_id');
    }

    public function genero(){
      return $this->belongsTo('App\Generos', 'generos_id');
    }
}
