<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>conversation time!</title>
    <link rel="stylesheet" type="text/css" href="quiz.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="navbar">
      <a href="index.php">messages</a>
      <a href="regulars.html">regulars</a>
      <a href="form.php">order</a>
      <a href="cafe.html">cafe</a>
      <a href="index.html">home</a>
    </div> 
    <div id="page-wrap">
        <h1 class="transparent index-headline">what drink are you?</h1>
    <form action="grade.php" method="post" id="quiz">
            <ul id="test-questions">
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>what do you like to do in your spare time?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A" class="fwrd labela">hang out with friends</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb">do something productive to get ahead </label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C" class="fwrd labelc">go to trendy places to shop, eat, and sightsee</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D" class="fwrd labeld">stay at home and relax</label>
                    </div>
                    <p class="quiz-progress">1 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>how would your friends describe you?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A" class="fwrd labela">bright, extroverted, and easy to talk to</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb">hardworking,  ambitious, and serious</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C" class="fwrd labelc">trendy, popular, and glamorous</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D" class="fwrd labeld">chill, quiet, and perhaps a little lazy LOL</label>
                    </div>
                    <p class="quiz-progress">2 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>how would you describe your usual fashion?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A" class="fwrd labela">casual--hoodie and jeans ftw!</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb">formal--a nice dress shirt and pants</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C" class="fwrd labelc">fashionable--i'm always the best dressed person in the room</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D" class="fwrd labeld">LOL what's fashion? i just wear whatever's comfy</label>
                    </div>
                    <p class="quiz-progress">3 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>what kind of music do you like listening to?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A" class="fwrd labela">something upbeat and high energy</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B" class="fwrd labelb">classical or lofi music that will help me focus</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C" class="fwrd labelc">whatever is on the hot 100</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D" class="fwrd labeld">it varies</label>
                    </div>
                    <p class="quiz-progress">4 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>if you could go anywhere in the world, where would you go?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">anywhere my friends are</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">i'll end up travelling the world on business trips eventually</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">somewhere trendy like korea or paris</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">i'd stay home LOL</label>
                    </div>
                    <p class="quiz-progress">5 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="anticipate">okay, i think i know what to make for you!</h3>
                    <input type="submit" value="pick up your drink!" id="submit-quiz" />
                </li>
            </ul>
</form>
        <div class="nomargin"></div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    <script>
           (function($) {
              var timeout= null;
              var $mt = 0;
              $("#quiz .fwrd").click(function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){ 
                    $mt = $mt - 430;
                    $("#test-questions").css("margin-top", $mt); 
                }, 333);
              });
           }(jQuery))
    </script>
</body>
</html>