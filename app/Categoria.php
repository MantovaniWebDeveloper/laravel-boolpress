<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  public function categorie(){

    return $this->belongsTo('App\Post');
  }
}
