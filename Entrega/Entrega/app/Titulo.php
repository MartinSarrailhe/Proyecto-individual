<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    protected $guarded = [];

    public function user(){
      return $this->belongsTo('App\User', 'user_id');
    }

    public function genres(){
      return $this->belongsTo('App\Genres', 'genres_id');
    }
}
