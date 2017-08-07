<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workouts extends Model
{
    public function exercises() {
      return $this->belongsToMany('App\exercises');
    }
}
