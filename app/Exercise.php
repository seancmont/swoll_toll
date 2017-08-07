<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public function musclegroups() {
      return $this->belongsTo('App\Musclegroup');
    }

    public function workouts() {
      return $this->belongsToMany('App\Workout');
    }
}
