<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function posts(){
    
    //le categorie hanno molti post
    return $this->hasMany('app\Post');
  }
}
