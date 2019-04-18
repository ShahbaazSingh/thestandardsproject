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

                    //mock use case, func's will be added later.

                        echo '<table class = "table"><title>Individual Unit Proficiency</title>
                                <thead class = "thead-dark">
                                <tr align="center">
                                    <th>Name</th>
                                    <th><button>M6.1.1</button></th>
                                    <th><button>M6.2.1</button></th>
                                    <th><button>M6.2.2</button></th>
                                    <th><button>M6.3.1</button></th>
                                    <th><button>M6.4.1</button></th>
                                </tr>
                                </thead>
                            '; 
                            //gather information on student proficiency in specific unit

                        echo '
                                <tbody align="center">
                                <tr>
                                    <td><input type="checkbox">Apple</input></td>
                                    <td></td>  
                                    <td></td>
                                    <td>X</td>  
                                    <td>X</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox">Aaron</input></td>
                                    <td>X</td>  
                                    <td></td>
                                    <td>X</td>  
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox">John</input></td>
                                    <td></td>  
                                    <td></td>
                                    <td>X</td>  
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox">Sandra</input></td>
                                    <td></td>  
                                    <td></td>
                                    <td>X</td>  
                                    <td>X</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox">Apricot</input></td>
                                    <td></td>  
                                    <td>X</td>
                                    <td></td>  
                                    <td></td>
                                    <td>X</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox">Hashbrown</input></td>
                                    <td></td>  
                                    <td></td>
                                    <td>X</td>  
                                    <td>X</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox">Ricardo</input></td>
                                    <td></td>  
                                    <td></td>
                                    <td></td>  
                                    <td></td>
                                    <td>X</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox">Julian</input></td>
                                    <td></td>  
                                    <td></td>
                                    <td></td>  
                                    <td>X</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox">Noway</input></td>
                                    <td></td>  
                                    <td></td>
                                    <td>X</td>  
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox">Jose</input></td>
                                    <td></td>  
                                    <td>X</td>
                                    <td></td>  
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
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
                    
                        //end mock
                        
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection