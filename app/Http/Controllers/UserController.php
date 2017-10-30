<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
    function showUsers(){
    	$users = User::all();

    	return view('users.users_list', compact('users'));
    }
}
