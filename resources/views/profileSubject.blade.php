@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Proficiency Overview</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php
                        echo '<table class = "table"><title>Proficiency Overview</title>
                                <thead class = "thead-dark">
                                <tr align="center">
                                    <th><a href="'.$subject.'/2">Proficient</th>
                                    <th><a href="'.$subject.'/1">Almost Proficient</th>
                                    <th><a href="'.$subject.'/0">Not Proficient</th>
                                </tr>
                                </thead>
                            '; 

                            //gather information about how many students are proficient/almost proficient/not proficient

                            $pu = $data['proficientUsers'];
                            $npu = $data['notProficientUsers'];
                            $apu = $data['almostProficientUsers'];

                            foreach($pu as $x)
                                echo $x;
                            

                            
                        echo '<tr align="center">
                             <td>Josiah</td>
                             <td>Mell</td>
                             <td>Apple</td>
                             </tr>
                             ';


                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection