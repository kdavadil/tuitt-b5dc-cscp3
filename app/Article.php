<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    function get_comments(){
    	return $this->hasMany('App\Comment', 'article_id', 'id');
    }
}
