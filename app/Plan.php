<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function plandetail(){ //T
        return $this->hasMany('App\PlanDetail');
    }
}
