<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Classes;
use App\User;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('checkuser');
    }

    /**
     * Show the profile page after clicking on class.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pageOne($classid)
    {
        $selectedClass = Classes::where('class_id', $classid)->first();
        if($selectedClass['teacher_id'] == Auth::user()->id)
            return view('profile')->with('classid',$classid);
        else
            return redirect('/');
        
    }

    public function pageSubject($classid,$subject)
    {
        $data = [
            'class_id'=>$classid,
            'subject'=>$subject,
        ];

        $selectedClass = Classes::where('class_id', $classid)->first();
        if($selectedClass['teacher_id'] == Auth::user()->id)
            return view('profileSubject')->with('data',$data);
        else
            return redirect('/');
        
    }

    public function pageProficiency($classid,$subject,$prof)
    {
        $data = [
            'class_id'=>$classid,
            'subject'=>$subject,
            'prof'=>$prof,
        ];

        $selectedClass = Classes::where('class_id', $classid)->first();
        if($selectedClass['teacher_id'] == Auth::user()->id)
            return view('profileProficiency')->with('data',$data);
        else
            return redirect('/');
        
    }

    public function moduleprogress()
    {
        return view('moduleprogress');
    }



    public function pageOneStudent($classid)
    {
        $user = User::find(Auth::user()->id);
        $class = $user->classes;
        if($class->find($classid) && $user->role == 0)
            return view('profileStudent')->with('classid',$classid);
        else
            return redirect('/');
    }

    public function ModuleStudent($type, $id)
    {
        $data = [
            'type'=>$type,
            'id'=>$id,
        ];
        return view('module')->with('data',$data);
    }

}
