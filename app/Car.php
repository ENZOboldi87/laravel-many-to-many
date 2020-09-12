<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  protected $fillable = [
    'user_id',
    'manifacturer',
    'year',
    'engine',
    'plate',
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function tags()
  {
    return $this->belongsToMany('App\Tag');
  }
}
