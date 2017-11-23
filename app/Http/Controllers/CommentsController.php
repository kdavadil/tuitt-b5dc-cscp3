<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
    	$comment = new Comment();
    	$comment->description = $request->description;
    	$comment->user_id = Auth::user()->id;
    	$comment->approve = 1;
    	$comment->goal_id = "1";
    	$comment->save();

    	return back();
    }
}
