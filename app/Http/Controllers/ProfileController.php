<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Classes;
use App\User;
use DB;

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
        session()->forget('data');

        $class = Classes::where('class_id', $classid)->first();
                            $usersInClass = $class->users;
                            $proficientCount = 0;
                            $almostProficientCount = 0;
                            $notProficientCount = 0;
                            $proficientUsers = [];
                            $notProficientUsers = [];
                            $almostProficientUsers = [];
                            $numUnits = DB::table('proficiency')->where('w', 'M')->count();
                            foreach($usersInClass as $user){
                                $average = 0;
                                $total = 0;
                                
                                $result = DB::select('select up.grade 
                                                      from user_proficiency up 
                                                      join users u on up.user_id = u.id
                                                      join proficiency p on up.proficiency_id = p.id
                                                      where u.id ='.$user->id.'
                                                      and p.w = "M"');
                                    foreach($result as $res){
                                        $total += $res->grade;
                                    }

                                        $average = $total/$numUnits;


                                        if(round($average)==0){
                                            $notProficientUsers[] = $user;
                                            $notProficientCount++;
                                        }
                                        else if(round($average)==1){
                                            $almostProficientUsers[] = $user;
                                            $almostProficientCount++;
                                        }
                                        else if(round($average)==2){
                                            $proficientUsers[] = $user;
                                            $proficientCount++;
                                        }
                            }
        $data = [
            'notProficientUsers'=>$notProficientUsers,
            'notProficientCount'=>$notProficientCount,
            'almostProficientUsers'=>$almostProficientUsers,
            'almostProficientCount'=>$almostProficientCount,
            'proficientUsers'=>$proficientUsers,
            'proficientCount'=>$proficientCount,
            'classid'=>$classid
        ];                    

        session(['data' => $data]);


        if($selectedClass['teacher_id'] == Auth::user()->id)
            return view('profile')->with('data',$data);
        else
            return redirect('/');
        
    }

    public function pageSubject($classid,$subject)
    {
        $data = session('data');

        $selectedClass = Classes::where('class_id', $classid)->first();
        if($selectedClass['teacher_id'] == Auth::user()->id)
            return view('profileSubject')->with(compact('data','subject'));
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
