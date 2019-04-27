@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php
                        //checks from user table if role is teacher
                        if(Auth::user()->role == 1){   

                            echo '<table class = "table"><title>Instructor\'s Class List</title>
                                <thead class = "thead-dark">
                                <tr>
                                    <th>Class Id</th>
                                    <th>Subject</th>
                                    <th>Grade</th>
                                    <th>Starts</th>
                                    <th>Ends</th>
                                    <th>School</th>
                                    <th>Room</th>
                                </tr>
                                </thead>
                            '; 
                        
                            $classes = App\Classes::where('teacher_id', Auth::user()->id)->get();
                            foreach ($classes as $class) {
                            
                            echo '<tr>';
                            echo '<td><a href="pageone/'.$class['class_id'].'">', $class['class_id'], '</a></td>';
                            echo '<td>', $class['subject'], '</td>';
                            echo '<td>', $class['grade'], '</td>';
                            echo '<td>', date('H:i:s', strtotime($class['starts_at'])), '</td>';
                            echo '<td>', date('H:i:s', strtotime($class['ends_at'])), '</td>';
                            echo '<td>', $class['school'], '</td>';
                            echo '<td>', $class['room'], '</td>';
                            echo '</tr>';
                            }

                            echo '</table>';
                            echo '<br></br>';

                            echo '<p><a href="/moduleprogress/'.Auth::user()->id.'" class="btn btn-xs btn-info pull-right">Track Module Progress</a></p>';
                            echo '<p><a href="#" class="btn btn-xs btn-info pull-right disabled">Add Intervention</a></p>';
                            echo '<p><a href="#" class="btn btn-xs btn-info pull-right disabled">Contacts List</a></p>';
                            
                        }
                        else if(Auth::user()->role == 0){
                            
                            $incomplete = 0;
                            $user = App\User::find(Auth::user()->id);
                            foreach($user->modules as $a){
                                if($a->pivot->completed == '')
                                    $incomplete++;
                            }
                            
                            if($incomplete>0){
                            echo 
                            '<div class="alert alert-success" role="alert">
                                You Have '.$incomplete.' New Module(s)!
                            </div>
                            ';
                             }

                            echo '<h3>Module\'s List</h3>';
                            echo '<table class="table table-bordered table-dark" style="font-size:80%"><title>Module\'s List</title>
                                <thead class = "thead-dark">
                                <tr>
                                    <th>Subject</th>
                                    <th>Date Assigned</th>
                                    <th>Date Due</th>
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Date Completed</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                            ';
                    
                            foreach($user->modules as $a){
                        
                                echo'
                                <tr>
                                    <td>'.$a->subject.'</td>
                                    <td>'.$a->pivot->assigned.'</td>
                                    <td>'.$a->pivot->due.'</td>  
                                    <td>'.$a->type.'</td>
                                    <td><a href="/module/'.$a->type.'/'.$a->module_id.'/'.$a->pivot->id.'">'.$a->name.'</a></td>
                                    <td>'.$a->pivot->completed.'</td>
                                ';
                                if($a->pivot->completed == ''){
                                    echo '<td>In-Progress</td>';
                                }
                                else {
                                    echo '<td>Completed</td>';
                                }
                                echo'       
                                </tr>
     
                            ';

                            }
                            echo '</table>';


                            echo '<br></br>';

                            echo '<h3>Student\'s Class List</h3>';
                            echo '<table class = "table"><title>Student\'s Class List</title>
                                <thead class = "thead-dark">
                                <tr>
                                    <th>Class Id</th>
                                    <th>Subject</th>
                                    <th>Grade</th>
                                    <th>Starts</th>
                                    <th>Ends</th>
                                    <th>School</th>
                                    <th>Room</th>
                                </tr>
                                </thead>
                            '; 
                        
                            $user = App\User::find(Auth::user()->id);
                            foreach ($user->classes as $class) {
                            
                            echo '<tr>';
                            echo '<td>'. $class['class_id']. '</td>';
                            echo '<td>', $class['subject'], '</td>';
                            echo '<td>', $class['grade'], '</td>';
                            echo '<td>', date('H:i:s', strtotime($class['starts_at'])), '</td>';
                            echo '<td>', date('H:i:s', strtotime($class['ends_at'])), '</td>';
                            echo '<td>', $class['school'], '</td>';
                            echo '<td>', $class['room'], '</td>';
                            echo '</tr>';
                            }

                        }

                        else if(Auth::user()->role == 2){


                            echo '<table class = "table"><title>List of Students at School</title>
                                <thead class = "thead-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Class List</th>
                                    <th>Report</th>
                                    <th>Grade</th>
                                        
                                </tr>
                                </thead>
                            '; 


                            $classes = App\Classes::where('school', 'PS101')->get();
                            foreach($classes as $class){
                                foreach($class->users as $student){
                                    echo '
                                        <tr align="left">
                                            <td>'.$student->name.'</td>
                                            <td>'.$student->username.'</td>
                                            <td>'.$student->email.'</td>
                                            <td><a href="#">Classes</a></td>
                                            <td><a href="#">Link</a></td>
                                            <td>'.$student->grade.'</td>
                                        </tr>   
                                    ';
                                }
                            }
                            

                            echo '</table>';



                        }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
