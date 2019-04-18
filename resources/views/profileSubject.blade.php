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
                                    <th><a href="'.$data['subject'].'/2">Proficient</th>
                                    <th><a href="'.$data['subject'].'/1">Almost Proficient</th>
                                    <th><a href="'.$data['subject'].'/0">Not Proficient</th>
                                </tr>
                                </thead>
                            '; 
                            //gather information about how many students are proficient/almost proficient/not proficient

                            //begin mock use case, func's coming soon
                            
                        echo '<tr align="center">
                             <td>Josiah</td>
                             <td>Mell</td>
                             <td>Apple</td>
                             </tr>

                             <tr align="center">
                             <td>Max</td>
                             <td>Dillian</td>
                             <td>Aaron</td>
                             </tr>

                             <tr align="center">
                             <td>Mike</td>
                             <td>Mitchel</td>
                             <td>John</td>
                             </tr>
                            
                             <tr align="center">
                             <td>Clara</td>
                             <td>Kenny</td>
                             <td>Sandra</td>
                             </tr>

                            <tr align="center">
                             <td></td>
                             <td>Mell</td>
                             <td>Apricot</td>
                             </tr>

                             <tr align="center">
                             <td></td>
                             <td>Chel</td>
                             <td>Hashbrown</td>
                             </tr>

                             <tr align="center">
                             <td></td>
                             <td></td>
                             <td>Ricardo</td>
                             </tr>

                             <tr align="center">
                             <td></td>
                             <td></td>
                             <td>Julian</td>
                             </tr>

                             <tr align="center">
                             <td></td>
                             <td></td>
                             <td>NoWay</td>
                             </tr>
                            
                             <tr align="center">
                             <td></td>
                             <td></td>
                             <td>Jose</td>
                             </tr>';

                            //end mock use case

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection