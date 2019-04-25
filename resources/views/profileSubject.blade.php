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
                            //gather information about how many students are proficient/almost proficient/not proficient

                            $pu = $data['pUsers'];
                            $apu = $data['almostPUsers'];
                            $npu = $data['notPUsers'];
                           

echo '<table class="table"><title>Proficiency Overview</title>
<tr>
<td>
    <table class="table">
        <thead class="table-info">
            <tr align="center" >
                <td><a href="'.$subject.'/2">Proficient</a></td>
            </tr>
        </thead>
        <tbody>';
            foreach($pu as $x){
        echo'<tr align="center">
                <td>'.$x->name.'</td>
            </tr>';
            }
echo    '</tbody>
    </table>
</td>
<td>
    <table class="table">
        <thead class="table-info">
            <tr align="center">
                <td><a href="'.$subject.'/1">Almost Proficient</a></td>
            </tr>
        </thead>
        <tbody>';
            foreach($apu as $x){
        echo'<tr align="center">
                <td>'.$x->name.'</td>
            </tr>';
            }
echo     '</tbody>
    </table>
</td>
<td>
    <table class="table">
        <thead class="table-info">
            <tr align="center">
                <td><a href="'.$subject.'/0">Not Proficient</a></td>
            </tr>
        </thead>
        <tbody>';
            foreach($npu as $x){
        echo'<tr align="center">
                <td>'.$x->name.'</td>
            </tr>';
            }
        '</tbody>
    </table>
</td>
</tr>
</table>';

                            
                    


                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection