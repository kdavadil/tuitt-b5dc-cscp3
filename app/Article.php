<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    function get_comments(){
    	return $this->hasMany('App\Comment', 'goal_id', 'id');
    }
}
