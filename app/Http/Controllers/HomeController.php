<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goal;
use App\Usergoal;
use App\User;
use Session;
use Auth;
use Image;



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

        $goals =  Usergoal::
        where('name','=',Auth::user()->name)
        ->Where('Completed' ,'=',"")
        ->get();

        return view('layouts.goals', compact('goals'));
    }


        public function newsfeed()
    {

        $goals =  Usergoal::
        join('users', 'users.name', '=', 'usergoals.name')
        ->get();

        return view('/newsfeed', compact('goals'));
    }

    function create() {
        return view('layouts.goals_create');
    }

        function store(Request $request) {
        $new_goals = new Usergoal();
        $new_goals->goal = $request->goal;
        $new_goals->description = $request->Description;
        $new_goals->priority = $request->Priority;
        $new_goals->completed = '';
        $new_goals->notes = '';
        $new_goals->name = Auth::user()->name;
        $new_goals->status = '';
        $new_goals->save();
        return redirect('goals');
    }

     function edit_goal($id) {
        $goal_tbe = Usergoal::find($id);

    return view('layouts.goal_show_single_item',
            compact('goal_tbe'));
    }

    function save_goal($id,Request $request) {


        $goal_save = Usergoal::find($id);
        $goal_save->notes = $request->notes;
        $goal_save->Completed = date('Y-m-d H:i:s');
        $goal_save->status = 'Completed';
        $goal_save->save();
        return redirect('goals');
    }

        function delete_goal($id) {
    // echo "we are deleting this id: $id";
        $goal_tbd = Usergoal::find($id);
        $goal_tbd->delete();

        

        Session::flash('delete-goal','Goal deleted successfully!');


        return redirect('goals');   
    }

    public function profile()
    {
        return view('profile',array('user' => Auth::user()));
    }

    public function updateImage(Request $request) {

        //handle image upload

        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time(). '.' .$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('/avatar/'. $filename ));

            $user  = Auth::user();
            $user->avatar = $filename;
            $user->save();

             Session::flash('image-edit','Image saved successfully!');

             return view('profile',array('user' => Auth::user()));
        }

    }

    public function profileEdit($id,Request $request) {
        $usersave = User::find($id);
        $usersave->email = $request->email;
        $usersave->name = $request->name;
        $usersave->save();

        Session::flash('success','Profile saved successfully!');

        return redirect('profile');

    }


    public function chooseGoal() {
        return view ('layouts.goals_choose');
    }

    public function goals_finance() {
    $goal_category = 'Finance';
        return view ('layouts.goals_finance');
    }

    public function goals_physical() {
    return view ('layouts.goals_physical');
    }

    public function goals_mental() {
    return view ('layouts.goals_mental');
    }

    public function goals_spiritual() {
    return view ('layouts.goals_spiritual');
    }

    public function goals_relational() {
    return view ('layouts.goals_relational');
    }

}
