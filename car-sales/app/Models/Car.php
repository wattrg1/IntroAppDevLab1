<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  public $timestamps = false;
    protected $fillable = [
        'yard_id',
        'type',
        'description',
        'price',
        'kms',
        'year',
        'image'
    ];

    public function yard() {
        return $this->belongsTo('App\Models\Yard');
    }
}
