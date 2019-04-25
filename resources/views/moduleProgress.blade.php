@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Track Student Modules</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php
                        
                        echo '<table class = "table" style="font-size:80%"><title>Module Progress</title>
                                <thead class = "thead-dark">
                                <tr align="center">
                                    <th>Subject</th>
                                    <th>Student</th>
                                    <th>Assigned</th>
                                    <th>Due</th>
                                    <th>Completed</th>
                                    <th>Report</th>
                                    <th>Name</th>
                                    <th>Proficiency</th>
                                    <th>Grade</th>
                                </tr>
                                </thead>
                            '; 

                        echo  '<tbody>';    

                        foreach($gather as $data){

                            $module = App\Module::where('module_id', $data->module_id)->first();
                            $student = App\User::where('id', $data->user_id)->first();

                            echo '
                                <tr align="center">
                                    <td>'.$module->subject.'</td>
                                    <td>'.$student->name.'</td>  
                                    <td>'.$data->assigned.'</td>
                                    <td>'.$data->due.'</td>
                                    <td>'.$data->completed.'</td>
                                    <td><a href="'.$data->report_link.'">Link</a></td>
                                    <td>'.$module->type.'</td>
                                    <td>'.$module->proficiency.'</td>
                                    <td>'.$data->grade.'%<td>
                                </tr>
                            '
                            ;
                        }   
                        
                        
                        echo '</tbody>';
                        echo '</table>';

                        


                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection