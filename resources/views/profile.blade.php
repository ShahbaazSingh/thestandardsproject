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
                            $class = App\Classes::where('class_id', $data['classid'])->first();
                            /*$usersInClass = $class->users;
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
                            }*/


                            echo '<tr align="center">';
                            echo '<td align="left"><a href="'.$class['class_id'].'/math"> Math </a></td>';
                            echo '<td>'.$data['proficientCount'].'</td>';
                            echo '<td>'.$data['almostProficientCount'].'</td>';
                            echo '<td>'.$data['notProficientCount'].'</td>';
                            echo '</tr>';

                            echo '<tr align="center">';
                            echo '<td align="left"><a href="'.$class['class_id'].'/english"> English </a></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '</tr>';

                            echo '<tr align="center">';
                            echo '<td align="left"><a href="'.$class['class_id'].'/science"> Science </a></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '</tr>';

                            echo '<tr align="center">';
                            echo '<td align="left"><a href="'.$class['class_id'].'/socialstudies"> Social Studies </a></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '</tr>';





                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection