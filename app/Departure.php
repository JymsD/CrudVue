<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departure extends Model
{
    protected $fillable = [
        'title',
    ];

    public function positions() {
      return $this->hasMany('App\Position');
    }
}
