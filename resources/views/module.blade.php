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

                    if($data['type'] == 'video'){

                    echo'
                    <iframe id="video" width="100%" height="400" src="https://www.youtube.com/embed/rI2peJT2Ty8"></iframe>
                        ';
                    

                    echo '
                    
                    <ul class="quiz">
                    <li>
                      <h4>What is 425/25 using long division?</h4>
                        <ul class="choices">
                          <li>A <label><input type="radio" name="question0" value="A"><span>17</span></label></li>
                          <li>B <label><input type="radio" name="question0" value="B"><span>14</span></label></li>
                          <li>C <label><input type="radio" name="question0" value="C"><span>13</span></label></li>
                          <li>D <label><input type="radio" name="question0" value="D"><span>10</span></label></li>
                        </ul>
                    </li>
                    </ul>
                    
                    <button class="view-results" href="/">Submit</button> 

                    ';

                  }

                    elseif($data['type'] == 'mc'){    

                        echo '
                        
<ul class="quiz">
  <li>
    <h4>What is 3/4 + 1/4?</h4>
    <ul class="choices">
      <li>A <label><input type="radio" name="question0" value="A"><span>1/1</span></label></li>
      <li>B <label><input type="radio" name="question0" value="B"><span>4/4</span></label></li>
      <li>C <label><input type="radio" name="question0" value="C"><span>1</span></label></li>
      <li>D <label><input type="radio" name="question0" value="D"><span>All of the Above</span></label></li>
    </ul>
  </li>
  <li>
    <h4>What is 1/3 + 1/3?</h4>
    <ul class="choices">
      <li>A <label><input type="radio" name="question1" value="A"><span>2/3</span></label></li>
      <li>B <label><input type="radio" name="question1" value="B"><span>5/6</span></label></li>
      <li>C <label><input type="radio" name="question1" value="C"><span>1/3</span></label></li>
      <li>D <label><input type="radio" name="question1" value="D"><span>3/3</span></label></li>
    </ul>
  </li>
  <li>
    <h4>What is 1/4+1/3</h4>
    <ul class="choices">
      <li><label><input type="radio" name="question2" value="A"><span>7/12</span></label></li>
      <li><label><input type="radio" name="question2" value="B"><span>5/11</span></label></li>
      <li><label><input type="radio" name="question2" value="C"><span>6/6</span></label></li>
      <li><label><input type="radio" name="question2" value="D"><span>2/4</span></label></li>
    </ul>
  </li>
</ul>   

<button class="view-results" href="/">Submit</button> 
                        
                        
                        ';

                        }
                    ?>

                    <script>
                        var video = document.getElementsById('video').addEventListener('ended', function(e) {

                        alert('The End');

                        });
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection