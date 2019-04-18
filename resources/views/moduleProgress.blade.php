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

                        echo '
                                <tbody>
                                <tr align="center">
                                    <td>Math</td>
                                    <td>Shahbaaz</td>  
                                    <td>02-10-19</td>
                                    <td>02-17-19</td>
                                    <td>02-16-19</td>
                                    <td><a href="#">Link</a></td>
                                    <td>V1</td>
                                    <td>M6.1.1</td>
                                    <td>87%<td>
                                </tr>

                                <tr align="center">
                                    <td>Math</td>
                                    <td>Gonzalo</td>  
                                    <td>02-10-19</td>
                                    <td>02-17-19</td>
                                    <td></td>
                                    <td><a href="#">Link</a></td>
                                    <td>V1</td>
                                    <td>M6.1.1</td>
                                    <td>85%<td>
                                </tr>
                        
                                <tr align="center">
                                    <td>Math</td>
                                    <td>Kristina</td>  
                                    <td>02-10-19</td>
                                    <td>02-17-19</td>
                                    <td>02-16-19</td>
                                    <td><a href="#">Link</a></td>
                                    <td>V1</td>
                                    <td>M6.1.1</td>
                                    <td>93%<td>
                                </tr>
                        
                                <tr align="center">
                                    <td>Math</td>
                                    <td>Hal</td>  
                                    <td>02-10-19</td>
                                    <td>02-17-19</td>
                                    <td>02-12-19</td>
                                    <td><a href="#">Link</a></td>
                                    <td>V1</td>
                                    <td>M6.1.1</td>
                                    <td>65%<td>
                                </tr>
                        
                                <tr align="center">
                                    <td>Math</td>
                                    <td>Mar</td>  
                                    <td>02-10-19</td>
                                    <td>02-17-19</td>
                                    <td>02-15-19</td>
                                    <td><a href="#">Link</a></td>
                                    <td>V1</td>
                                    <td>M6.1.1</td>
                                    <td>90%<td>
                                </tr>
                        
                                <tr align="center">
                                    <td>Math</td>
                                    <td>Paige</td>  
                                    <td>02-10-19</td>
                                    <td>02-17-19</td>
                                    <td></td>
                                    <td><a href="#">Link</a></td>
                                    <td>V1</td>
                                    <td>M6.1.1</td>
                                    <td>80%<td>
                                </tr>
                                </tbody>

                        
                        ';


                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection