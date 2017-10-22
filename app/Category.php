<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  //restrict columns from modifying
  protected $guarded = [];

  public function pages()
  {
    return $this->hasMany('App\Posts','category_id');
  }
}
