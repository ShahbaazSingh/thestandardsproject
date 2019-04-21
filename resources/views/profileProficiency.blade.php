@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Individual Unit Proficiency</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php

                    $currentProf;
                    if($subject == 'math')
                        $currentProf = 'M';
                    else if($subject == 'english')
                        $currentProf = 'E'; 
                    else if($subject == 'science')
                        $currentProf = 'Sci'; 
                    else if($subject == 'socialstudies')
                        $currentProf = 'SS';         
                    

                    $units = DB::select('select * from proficiency where w="'.$currentProf.'"');

                        echo '<table class = "table"><title>Individual Unit Proficiency</title>
                                <thead class = "thead-dark">
                                <tr align="center">
                                    <th>Name</th>';
                                foreach($units as $u){
                                echo   '<th><button>'.$u->name.'</button></th>';
                                }
                                
                                '</tr>
                                </thead>
                            '; 
                            //gather information on student proficiency in specific unit

                        echo '
                                <tbody align="left">';
                                foreach($student as $s){
                        echo    '<tr> 
                                    <td><input type="checkbox"> '.$s->name.'</input></td>';
                                    foreach($units as $u){

                                                    $result = DB::table('user_proficiency')
                                                        ->join('users', 'user_proficiency.user_id', '=', 'users.id')
                                                        ->join('proficiency', 'user_proficiency.proficiency_id', '=', 'proficiency.id')
                                                        ->select('user_proficiency.grade')
                                                        ->where([
                                                                ['user_id', '=', $s->id],
                                                                ['proficiency_id', '=', $u->id],
                                                                ])
                                                        ->first();
                                        if($result->grade == $prof)
                                        echo '<td align="center">X</td>';
                                        else
                                        echo '<td align="center"></td>';
                                    }

                        echo    '</tr>';
                            }
                        echo    '</tbody>
                            </table>
                            ';
                                


                                //actions to be performed

                        echo '<br></br>';
                        echo '<br></br>';

                        echo '<table class = "table"><Assign Modules></title>
                                     <thead> 
                                        <th>Modules</th>
                                     </thead>

                                    <tr>
                                        <td>Intro to Adding Fractions Video <button>Send</button></td>
                                    </tr>
                                    <tr>
                                        <td>Adding Fractions Multiple Choice <button>Send</button></td>
                                    </tr>

                        ';
                    
                        
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection