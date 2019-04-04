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
                            echo '<td><a href="#">', $class['class_id'], '</a></td>';
                            echo '<td>', $class['subject'], '</td>';
                            echo '<td>', $class['grade'], '</td>';
                            echo '<td>', date('H:i:s', strtotime($class['starts_at'])), '</td>';
                            echo '<td>', date('H:i:s', strtotime($class['ends_at'])), '</td>';
                            echo '<td>', $class['school'], '</td>';
                            echo '<td>', $class['room'], '</td>';
                            echo '</tr>';
                            }
                            
                        }
                        else if(Auth::user()->role == 0){
                            
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
                            echo '<td><a href="#">', $class['class_id'], '</a></td>';
                            echo '<td>', $class['subject'], '</td>';
                            echo '<td>', $class['grade'], '</td>';
                            echo '<td>', date('H:i:s', strtotime($class['starts_at'])), '</td>';
                            echo '<td>', date('H:i:s', strtotime($class['ends_at'])), '</td>';
                            echo '<td>', $class['school'], '</td>';
                            echo '<td>', $class['room'], '</td>';
                            echo '</tr>';
                            }
                            

                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
