<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function plandetail(){
        return $this->hasMany('App\PlanDetail');
    }
}
