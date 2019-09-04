<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'birthday',
        'position_id'
    ];

    public function position() {
      return $this->belongsTo('App\Position');
    }
}
