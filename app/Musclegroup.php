<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musclegroup extends Model
{

	//Allows us to not hard delete everything
    // use SoftDeletes;

    protected $dates = ['timestamps'];
    protected $fillable = ['id', 'name'];

    //Specifying the join relationships
	public function exercises() {
      return $this->hasMany('App\Exercise');
    }
    
    public function workouts()
   {
       return $this->hasManyThrough('App\Workouts', 'App\Exercises');
   }
}
