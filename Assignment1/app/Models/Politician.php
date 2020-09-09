<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Politician extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'party_id',
        'name',
        'gender',
        'rank',
        'electorate',
        'image'
    ];

    public function party() {
        return $this->belongsTo('App\Models\Party');
    }
}