<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goal;
use App\Usergoal;
use App\User;
use Session;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showGoals()
    {
        $goals = Usergoal::all();
        return view('layouts.goals', compact('goals'));
    }

    function create() {
        return view('layouts.goals_create');
    }

        function store(Request $request) {

        $new_goals = new Usergoal();
        $new_goals->goal = $request->goal;
        $new_goals->description = $request->Description;
        $new_goals->priority = $request->Priority;
        $new_goals->name = Auth::user()->name;
        $new_goals->save();

        return redirect('goals');
    }

     function edit_goal($id) {
        $goal_tbe = Usergoal::find($id);

        return view('layouts.goal_show_single_item',
            compact('goal_tbe'));
    }


}
