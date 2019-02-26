<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function categories(){

    //il ritorno della one to many
    return $this->belongsTo('app\Category');
  }
}
