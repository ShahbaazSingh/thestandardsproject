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
                                    <td><input type="checkbox" value="'.$s->id.'"> '.$s->name.'</input></td>';
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
                       
                        ?>


                        <br></br>
                        <br></br>

                        <table class = "table"><Assign Modules></title>
                                     <thead> 
                                        <th>Modules</th>
                                     </thead>

                                    <tr>
                                        <td>Intro to Adding Fractions Video <a href = "#" onclick="redirectTo('3');" class="btn btn-xs btn-info pull-right">Send</a></td>
                                    </tr>
                                    <tr>
                                        <td>Adding Fractions Multiple Choice <a href = "#" onclick="redirectTo('4');" class="btn btn-xs btn-info pull-right">Send</a></td>
                                    </tr>


                                    
                        <script>
                            function redirectTo(mod){
                            var values = [],
                            inputs = document.getElementsByTagName("input");

                            for (var i = inputs.length -1 ; i>= 0; i--){
                                if (inputs[i].type === "checkbox" && inputs[i].checked)
                                    values.push(inputs[i].value);
                            }
                                values = JSON.stringify(values);
                                location.href="/"+mod+"/"+values;
                        }
                        </script>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection