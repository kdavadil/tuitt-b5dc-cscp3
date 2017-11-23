<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usergoal extends Model
{
    public function comments() 
    {
    	return $this->hasMany('App\Comment','id', 'goal_id');
    }
}
