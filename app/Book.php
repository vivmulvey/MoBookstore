<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  public function publisher(){
    return $this->belongsTo('App\Publisher');
  }

  public function reviews()
  {
    return $this->hasMany('App\Review');
  }

  //$book->publisher()->name;
}
