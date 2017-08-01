<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class muscle_groups extends Model
{

	public function exercises() {
      return $this->hasMany('App\Exercises');
    }
    // protected $fillable = [
    	
    // 	'id',

    // 	'name',

    // 	'timestamps'

    // ];
}
