<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yard extends Model
{
  public $timestamps = false;
  protected $fillable = [
      'name',
      'location',
      'description',
      'image'
  ];

  public function cars() {
      return $this->hasMany('App\Models\Car');
  }
}
