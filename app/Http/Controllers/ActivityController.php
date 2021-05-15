<?php

namespace App\Http\Controllers;

use App\Activity as AppActivity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //
    public function index(){
        $act = AppActivity::all();
        $act_count = count($act);
      
        return view('activty',compact('act','act_count'));
    }
    public function add(Request $request){
        $request->validate([
            'name' => 'required',
            'time' => 'required',
        ]);
        $activity = new AppActivity();
        $activity->name=$request->name;
        $activity->time=$request->time;
        $activity->save();
        return redirect()->back();

    }

}
