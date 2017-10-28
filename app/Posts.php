<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
  //restrict columns from modifying
  protected $guarded = [];

  //return the instance of user who  is author of that Posts
  public function author(){
    return $this->belongsTo('App\User','author_id');
  }

  public function category(){
    return $this->belongsTo('App\Category','category_id');
  }

  public function tags()
  {
    return $this->belongsToMany('App\Tag');
  }

}
