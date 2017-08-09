<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exerciseworkout extends Model
{
    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
        $this->table = 'exercise_workout';
    }

    public function workout() {
      return $this->belongsToMany(Workout::class);
    }

    public function exercises() {
      return $this->hasMany('App\Exercise');
    }
}
