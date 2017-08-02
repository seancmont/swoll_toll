<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class muscle_groups extends Model
{

	//Allows us to not hard delete everything
    // use SoftDeletes;

    protected $dates = ['timestamps'];
    protected $fillable = ['id', 'name'];

    //Specifying the join relationships
	public function exercises() {
      return $this->hasMany('App\Exercises');
    }
    
}
