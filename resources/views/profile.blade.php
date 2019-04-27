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

                            echo '<tr align="center" class="table-success" style="font-weight:bold">';
                            echo '<td align="left"><a';if($class['subject'] == 'Math') echo ' href="'.$class['class_id'].'/math"';echo 'class="btn btn-xs btn-success pull-right"> Math </a></td>';
                            echo '<td>'.$data['pCount'].'</td>';
                            echo '<td>'.$data['almostPCount'].'</td>';
                            echo '<td>'.$data['notPCount'].'</td>';
                            echo '</tr>';

                            $english = new App\Http\Controllers\ProfileController();
                            $englishData = $english->getProficiencyOverview($data['classid'], 'English');


                            echo '<tr align="center" class="table-warning" style="font-weight:bold">';
                            echo '<td align="left"><a href="'.$class['class_id'].'/english" class="btn btn-xs btn-warning pull-right disabled"> English </a></td>';
                            echo '<td>'.$englishData['pCount'].'</td>';
                            echo '<td>'.$englishData['almostPCount'].'</td>';
                            echo '<td>'.$englishData['notPCount'].'</td>';
                            echo '</tr>';

                            $science = new App\Http\Controllers\ProfileController();
                            $scienceData = $science->getProficiencyOverview($data['classid'], 'Science');

                            echo '<tr align="center" class="table-info" style="font-weight:bold">';
                            echo '<td align="left"><a href="'.$class['class_id'].'/science" class="btn btn-xs btn-info pull-right disabled"> Science </a></td>';
                            echo '<td>'.$scienceData['pCount'].'</td>';
                            echo '<td>'.$scienceData['almostPCount'].'</td>';
                            echo '<td>'.$scienceData['notPCount'].'</td>';
                            echo '</tr>';

                            $ss = new App\Http\Controllers\ProfileController();
                            $sSData = $ss->getProficiencyOverview($data['classid'], 'Social Studies');

                            echo '<tr align="center" class="table-danger" style="font-weight:bold">';
                            echo '<td align="left"><a href="'.$class['class_id'].'/socialstudies" class="btn btn-xs btn-danger pull-right disabled"> Social Studies </a></td>';
                            echo '<td>'.$sSData['pCount'].'</td>';
                            echo '<td>'.$sSData['almostPCount'].'</td>';
                            echo '<td>'.$sSData['notPCount'].'</td>';
                            echo '</tr>';





                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection