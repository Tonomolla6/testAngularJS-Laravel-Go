<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = [
    'id', 'name', 'tel', 'nif', 'email', 'user_id'
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
