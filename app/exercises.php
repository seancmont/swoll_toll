<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exercises extends Model
{
    public function muscle_groups() {
      return $this->belongTo('App\muscle_groups');
    }
}
