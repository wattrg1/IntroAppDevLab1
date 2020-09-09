<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'image',
    ];

    public function politicians() {
        return $this->hasMany('App\Models\Politician');
    }
}