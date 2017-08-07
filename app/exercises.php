<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exercises extends Model
{
    public function muscle_groups() {
      return $this->belongsTo('App\muscle_groups');
    }

    public function workouts() {
      return $this->belongsToMany('App\workouts');
    }
}
