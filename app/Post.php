<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function categorie(){

      return $this->hasMany('App\Categoria');
    }
}
