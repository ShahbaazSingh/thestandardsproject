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
 
                        echo '
                        
                        <ul class="quiz">
                          <li>
                            <h4>What is 3/4 + 1/4?</h4>
                            <ul class="choices"><span id="msgone"></span>
                              <li>A <label><input type="radio" name="question1choice" value="A"><span>1/1</span></label></li>
                              <li>B <label><input type="radio" name="question1choice" value="B"><span>4/4</span></label></li>
                              <li>C <label><input type="radio" name="question1choice" value="C"><span>1</span></label></li>
                              <li>D <label><input type="radio" name="question1choice" value="D"><span>All of the Above</span></label></li>
                            </ul>
                          </li>
                          <li>
                            <h4>What is 1/3 + 1/3?</h4>
                            <ul class="choices"><span id="msgtwo"></span>
                              <li>A <label><input type="radio" name="question2choice" value="A"><span>2/3</span></label></li>
                              <li>B <label><input type="radio" name="question2choice" value="B"><span>5/6</span></label></li>
                              <li>C <label><input type="radio" name="question2choice" value="C"><span>1/3</span></label></li>
                              <li>D <label><input type="radio" name="question2choice" value="D"><span>3/3</span></label></li>
                            </ul>
                          </li>
                          <li>
                            <h4>What is 1/4+1/3</h4>
                            <ul class="choices"><span id="msgthree"></span>
                              <li><label><input type="radio" name="question3choice" value="A"><span>7/12</span></label></li>
                              <li><label><input type="radio" name="question3choice" value="B"><span>5/11</span></label></li>
                              <li><label><input type="radio" name="question3choice" value="C"><span>6/6</span></label></li>
                              <li><label><input type="radio" name="question3choice" value="D"><span>2/4</span></label></li>
                            </ul>
                          </li>
                        </ul>   

                        <a href = "#" onclick="answer('.$assignment_id.');" class="btn btn-xs btn-info pull-right">Submit</a>
                        
                        
                        ';
                    ?>

                    <script>

                      function answer(id){
                          
                            var radiosone = document.getElementsByName("question1choice");
                            var radiostwo = document.getElementsByName("question2choice");
                            var radiosthree = document.getElementsByName("question3choice");
                            var i = 0,
                            lenone = radiosone.length,
                            lentwo = radiostwo.length,
                            lenthree = radiosthree.length;
                            var checked = false;
                            var userAnswer;
                            var numCorrect = 0;
                            
                          for(var i = 0; i < lenone; i++ ) {
                              if(radiosone[i].checked) {
                                checked = true;
                                userAnswer = radiosone[i].value;
                              }
                            } 
                            if(!checked) {
                              alert("please select choice answer");
                              return;
                            }
                            // Correct
                            if(userAnswer === "D") {
                              document.getElementById("msgone").innerHTML = "";
                              numCorrect++;
                            }
                            // incorrect
                            else {
                              document.getElementById("msgone").innerHTML = "What should we add when the denominators are the same, the denominators or numerators?";
                            }
                            //*****************
                          for(var i = 0; i < lentwo; i++ ) {
                              if(radiostwo[i].checked) {
                                checked = true;
                                userAnswer = radiostwo[i].value;
                              }
                            } 
                            if(!checked) {
                              alert("please select choice answer");
                              return;
                            }
                            // Correct
                            if(userAnswer === "A") {
                              document.getElementById("msgtwo").innerHTML = "";
                              numCorrect++;
                            }
                            // incorrect
                            else {
                              document.getElementById("msgtwo").innerHTML = "What should we add when the denominators are the same, the denominators or numerators?";
                            }
                            //*****************
                          for(var i = 0; i < lenthree; i++ ) {
                              if(radiosthree[i].checked) {
                                checked = true;
                                userAnswer = radiosthree[i].value;
                              }
                            } 
                            if(!checked) {
                              alert("please select choice answer");
                              return;
                            }
                            // Correct
                            if(userAnswer === "A") {
                              document.getElementById("msgthree").innerHTML = "";
                              numCorrect++;
                            }
                            // incorrect
                            else {
                              document.getElementById("msgthree").innerHTML = "If the denominators are different, try finding the least common multiple and then multiplying the numerator with whatever you multiplied the denominator with.";
                            }

                            if(numCorrect == 3){
                              alert("Answers are correct!");
                              location.href="/completed/submit/"+id;
                            }

                        }

                        

                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection