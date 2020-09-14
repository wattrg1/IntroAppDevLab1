<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
  protected $fillable = [
      'user_id',
      'car_id',
      'purchase_date',
      'purchase_price'
  ];

  public function car() {
      return $this->belongsTo('App\Models\Car');
  }
}
