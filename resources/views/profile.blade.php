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
                                <thead class = "thead-light">
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

                            //math section
                            echo '<tr align="center" class="table-success" style="font-weight:bold">';
                            echo '<td align="left"><a';if($class['subject'] == 'Math') echo ' href="'.$class['class_id'].'/math"';echo '> Math </a></td>';
                            echo '<td>'.$data['pCount'].'</td>';
                            echo '<td>'.$data['almostPCount'].'</td>';
                            echo '<td>'.$data['notPCount'].'</td>';
                            echo '</tr>';
                            
                            echo '<tr align="center" class="table-warning" style="font-weight:bold">';
                            echo '<td align="left"><a href="'.$class['class_id'].'/english"> English </a></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '</tr>';

                            echo '<tr align="center" class="table-info" style="font-weight:bold">';
                            echo '<td align="left"><a href="'.$class['class_id'].'/science"> Science </a></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '</tr>';

                            echo '<tr align="center" class="table-danger" style="font-weight:bold">';
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