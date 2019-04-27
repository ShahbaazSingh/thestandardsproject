@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Module</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php   

                    echo'
                    <iframe id="video" width="100%" height="400" src="https://www.youtube.com/embed/QxVlJskOJAk"></iframe>
                        ';
                    

                    echo '
                    
                    <ul class="quiz">
                    <li>
                      <h4>What is 1/5 + 2/5?</h4>
                        <ul class="choices"><span id="msg"></span>
                          <li>A <label><input type="radio" name="choice" value="A"><span>3/5</span></label></li>
                          <li>B <label><input type="radio" name="choice" value="B"><span>4/5</span></label></li>
                          <li>C <label><input type="radio" name="choice" value="C"><span>3</span></label></li>
                          <li>D <label><input type="radio" name="chocie" value="D"><span>5</span></label></li>
                        </ul>
                    </li>
                    </ul>
                    
                    <a href = "#" onclick="answer('.$assignment_id.');" class="btn btn-xs btn-info pull-right">Submit</a> 

                    ';

                    ?>

                    <script>

                        function answer(id){
                          
                            var radios = document.getElementsByName("choice");
                            var i = 0, len = radios.length;
                            var checked = false;
                            var userAnswer;
                            
                            for( ; i < len; i++ ) {
                              if(radios[i].checked) {
                                checked = true;
                                userAnswer = radios[i].value;
                              }
                            } 
                            if(!checked) {
                              alert("please select choice answer");
                              return;
                            }
                            // Correct
                            if(userAnswer === "A") {
                              alert("Answer are correct!");
                              location.href="/completed/submit/"+id;
                            }
                            // incorrect
                            else {
                              document.getElementById("msg").innerHTML ="Since 1/5 and 2/5 have common denominators, what do we add only? The numerator, or the denominator?";
                            }
                        }

                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection