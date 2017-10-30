<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function get_user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    	//SELECT * FROM users JOIN comments ON (users.id = comments.user_id)
    }
}
