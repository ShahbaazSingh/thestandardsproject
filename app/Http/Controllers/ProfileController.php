<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Classes;
use App\User;
use DB;
use Mail;
use App\Mail\SendMailable; 

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

    //This function tries to take a class id and subject, and tries to find what students are proficient,
    //almost proficient and not proficient in that subject. I use a sql join operation and even return the count.
    //This function is essential, and called multiple times throughout the controller.

    public function getProficiencyOverview($classid, $subject){

        $class = Classes::where('class_id', $classid)->first();
            $usersInClass = $class->users;
            $pCount = 0;
            $almostPCount = 0;
            $notPCount = 0;
            $pUsers = [];
            $notPUsers = [];
            $almostPUsers = [];

            $proficiencyInitial;
            if($subject == 'Math')
                $proficiencyInitial = 'M';
            elseif($subject == 'English')
                $proficiencyInitial = 'E';      //since we only get the subject, we need to find the proficiency from it
            else if($subject == 'Science')
                $proficiencyInitial = 'Sci'; 
            if($subject == 'Social Studies')
                $proficiencyInitial = 'SS';     

            $numUnits = DB::table('proficiency')->where('w', ''.$proficiencyInitial.'')->count();

            if($numUnits != 0){

                            foreach($usersInClass as $user){
                                $average = 0;
                                $total = 0;
                                
                                $result = DB::select('select up.grade 
                                                      from user_proficiency up 
                                                      join users u on up.user_id = u.id
                                                      join proficiency p on up.proficiency_id = p.id
                                                      where u.id ='.$user->id.'
                                                      and p.w = "'.$proficiencyInitial.'"');
                                    foreach($result as $res){
                                        $total += $res->grade;
                                    }

                                        $average = $total/$numUnits;


                                        if(round($average)==0){
                                            $notPUsers[] = $user;
                                            $notPCount++;
                                        }
                                        else if(round($average)==1){
                                            $almostPUsers[] = $user;
                                            $almostPCount++;
                                        }
                                        else if(round($average)==2){
                                            $pUsers[] = $user;
                                            $pCount++;
                                        }
                            }
                        }    

        $package = [
            'notPCount'=>$notPCount,
            'notPUsers'=>$notPUsers,
            'almostPCount'=>$almostPCount,
            'almostPUsers'=>$almostPUsers,
            'pUsers'=>$pUsers,
            'pCount'=>$pCount,
            'classid'=>$classid
        ];            
        
        return $package;

    }


    /**
     * Show the profile page after clicking on class.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pageOne($classid)
    {
        session()->forget('data');

        $selectedClass = Classes::where('class_id', $classid)->first();
        
        $data = $this->getProficiencyOverview($classid, $selectedClass['subject']);
                            
        session(['data' => $data]);


        if($selectedClass['teacher_id'] == Auth::user()->id)    //checks to make sure that the person accessing page
            return view('profile')->with('data',$data);         //is the logged in user
        else    
            return redirect('/');
        
    }

    public function pageSubject($classid,$subject)
    {

        $selectedSubject;

        if($subject == 'math')
            $selectedSubject = 'Math';
        elseif($subject == 'english')
            $selectedSubject = 'English';       //subject parameter is not the way it is in database so I 
        elseif($subject == 'science')           //made sure it is
            $selectedSubject = 'Science';  
        elseif($subject == 'socialstudies')
            $selectedSubject = 'Social Studies';

        $data = $this->getProficiencyOverview($classid, $selectedSubject);

        $selectedClass = Classes::where('class_id', $classid)->first();
        if($selectedClass['teacher_id'] == Auth::user()->id)
            return view('profileSubject')->with(compact('data','subject','classid'));   //with returns the data to a view
        else    
            return redirect('/');
        
    }

    public function pageProficiency($classid,$subject,$prof)
    {

        $selectedSubject;
         if($subject == 'math')
            $selectedSubject = 'Math';
        elseif($subject == 'english')
            $selectedSubject = 'English';
        elseif($subject == 'science')
            $selectedSubject = 'Science';  
        elseif($subject == 'socialstudies')
            $selectedSubject = 'Social Studies';

        $data = $this->getProficiencyOverview($classid, $selectedSubject);

        if($prof == 0){
            $student = $data['notPUsers'];
        }

        elseif($prof == 1){
            $student = $data['almostPUsers'];       //student returns only the students with a specific proficiency
        }

        elseif($prof == 2){
            $student = $data['pUsers'];
        }

        $selectedClass = Classes::where('class_id', $classid)->first();
        if($selectedClass['teacher_id'] == Auth::user()->id)
            return view('profileProficiency')->with(compact('data','subject','prof','student'));
        else
            return redirect('/');
        
    }

    public function moduleprogress($id)
    {
        $gather = [];
        $gather = DB::select('select *  
                                    from user_module um 
                                    where um.assigned_by ='.$id.'   
                                    order by um.assigned');                 //this tries to find all modules assigned by $id

        if(Auth::user()->id == $id)
            return view('moduleprogress')->with('gather',$gather);
        else    
            return redirect('/');
    }

    public function emailUser()
    {
        $email = 'four@email.com';
        Mail::to($email)->send(new SendMailable());
        return view('/');
    }



    public function pageOneStudent($classid)
    {
        $user = User::find(Auth::user()->id);
        $class = $user->classes;
        if($class->find($classid) && $user->role == 0)                          //first page of student 
            return view('profileStudent')->with('classid',$classid);
        else
            return redirect('/');
    }

    public function ModuleStudent($type, $id)
    {
        $data = [
            'type'=>$type,
            'id'=>$id,                                          //the module page itself
        ];
        return view('module')->with('data',$data);
    }

}
