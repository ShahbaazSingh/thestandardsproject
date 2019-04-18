@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Overview</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php
                        echo '<table class = "table"><title>Student Proficiencies</title>
                                <thead class = "thead-dark">
                                <tr>
                                    <th>Subject</th>
                                    <th>Proficient</th>
                                    <th>Almost Proficient</th>
                                    <th>Not Proficient</th>
                                </tr>
                                </thead>
                            '; 
                            //gather information about how many students are proficient in a specific subject
                            $class = App\Classes::where('class_id', $classid)->first();
                            $usersInClass = $class->users;
                            $count = 0;
                            foreach($usersInClass as $user){
                               foreach($user->proficiencies->where('w','M') as $userProf){
                                   
                               }
                            }
                            

                            echo '<tr align="center">';
                            echo '<td align="left"><a href="'.$class['class_id'].'/math"> Math </a></td>';
                            echo '<td>4</td>';
                            echo '<td>6</td>';
                            echo '<td>10</td>';
                            echo '</tr>';

                            echo '<tr align="center">';
                            echo '<td align="left"><a href="'.$class['class_id'].'/english"> English </a></td>';
                            echo '<td>3</td>';
                            echo '<td>10</td>';
                            echo '<td>7</td>';
                            echo '</tr>';

                            echo '<tr align="center">';
                            echo '<td align="left"><a href="'.$class['class_id'].'/science"> Science </a></td>';
                            echo '<td>4</td>';
                            echo '<td>15</td>';
                            echo '<td>1</td>';
                            echo '</tr>';

                            echo '<tr align="center">';
                            echo '<td align="left"><a href="'.$class['class_id'].'/socialstudies"> Social Studies </a></td>';
                            echo '<td>18</td>';
                            echo '<td>2</td>';
                            echo '<td>0</td>';
                            echo '</tr>';





                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection