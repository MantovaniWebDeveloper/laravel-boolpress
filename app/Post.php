<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  //qui gli diciamo cosa si deve salvare il resto verrà ignorato
  protected $fillable = ['category_id','titolo','content'];

  public function category(){

    //il ritorno della one to many
    return $this->belongsTo('App\Category');
  }
}
