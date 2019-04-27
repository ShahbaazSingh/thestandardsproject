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
                            <h4>What is 1840/2?</h4>
                            <ul class="choices"><span id="msgone"></span>
                              <li>A <label><input type="radio" name="question1choice" value="A"><span>430</span></label></li>
                              <li>B <label><input type="radio" name="question1choice" value="B"><span>184</span></label></li>
                              <li>C <label><input type="radio" name="question1choice" value="C"><span>900</span></label></li>
                              <li>D <label><input type="radio" name="question1choice" value="D"><span>920</span></label></li>
                            </ul>
                          </li>
                          <li>
                            <h4>What is 100/20?</h4>
                            <ul class="choices"><span id="msgtwo"></span>
                              <li>A <label><input type="radio" name="question2choice" value="A"><span>5</span></label></li>
                              <li>B <label><input type="radio" name="question2choice" value="B"><span>10</span></label></li>
                              <li>C <label><input type="radio" name="question2choice" value="C"><span>20</span></label></li>
                              <li>D <label><input type="radio" name="question2choice" value="D"><span>50</span></label></li>
                            </ul>
                          </li>
                          <li>
                            <h4>What is 650/5</h4>
                            <ul class="choices"><span id="msgthree"></span>
                              <li><label><input type="radio" name="question3choice" value="A"><span>130</span></label></li>
                              <li><label><input type="radio" name="question3choice" value="B"><span>13</span></label></li>
                              <li><label><input type="radio" name="question3choice" value="C"><span>65</span></label></li>
                              <li><label><input type="radio" name="question3choice" value="D"><span>15</span></label></li>
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
                              document.getElementById("msgone").innerHTML = "How many times does 2 adding itself go to 1840? Recall the Long Division Video.";
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
                              document.getElementById("msgtwo").innerHTML = "How many times does 20 adding itself go to 100? Recall the Long Division Video.";
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
                              document.getElementById("msgthree").innerHTML = "How many times does 5 adding itself go to 650? Recall the Long Division Video.";
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