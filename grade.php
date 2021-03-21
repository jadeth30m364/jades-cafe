<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>order up!</title>
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
        <h1 class="transparent index-headline" >here's your order! enjoy~</h1>
        
        <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];

            $totalA = 0;
            $totalB = 0;
            $totalC = 0;
            $totalD = 0;

            if ($answer1 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
            if ($answer1 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
            if ($answer1 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
            if ($answer1 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

            if ($answer2 == "A") { $totalA = $totalA + 1.23; }
            if ($answer2 == "B") { $totalB = $totalB + 1.15; }
            if ($answer2 == "C") { $totalC = $totalC + 1.13; }
            if ($answer2 == "D") { $totalD = $totalD + 1.16; }

            if ($answer3 == "A") { $totalA = $totalA + 1.17; $totalC = $totalC + .05; }
            if ($answer3 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .03; }
            if ($answer3 == "C") { $totalC = $totalC + 1.13; $totalB = $totalB + .07; }
            if ($answer3 == "D") { $totalD = $totalD + 1.16; }

            if ($answer4 == "A") { $totalA = $totalA + 1.17; }
            if ($answer4 == "B") { $totalB = $totalB + 1.15; }
            if ($answer4 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }
            if ($answer4 == "D") { $totalD = $totalD + 1.16; $totalB = $totalB + .04; $totalA = $totalA + .045; $totalC = $totalC + .034; }

            if ($answer5 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .08; }
            if ($answer5 == "B") { $totalB = $totalB + 1.15; }
            if ($answer5 == "C") { $totalC = $totalC + 1.14; $totalA = $totalA + .06; $totalD = $totalD + .08; }
            if ($answer5 == "D") { $totalD = $totalD + 1.16; $totalC = $totalC + .04; }

            ?>
             <div class="results-overlay">

            <?php
            if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD) {
                  echo '<div class="quiz-overlay result priest"></div><div class="results-text"><p class="you-chose">your drink is:</p><img src="latte.jpg" alt="iced latte" class="results-img" /><div class="results test-results2"><p class="score">iced latte</p><p class="score-details">after careful consideration, i have decided that the drink that best suits you is an iced latte! this iced latte is made with medium roasted sumatra beans to give the drink some bright and mildly acidic notes, which pairs nicely with rich milk. once we add a dash of simple syrup and a few ice cubes, your latte is completed, and is just like you: bright, rich, and simple, yet outgoing and loved by everyone. enjoy! </p><a id="replay" class="take-quiz-btn" href="/test.php">order another drink?</a></div>';
            }
            elseif ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD) {
                  echo '<div class="quiz-overlay result megadeth"></div><div class="results-text"><p class="you-chose">your drink is:</p><img src="espresso.jpg" alt="espresso shot" class="results-img" /><div class="results test-results2"><p class="score">espresso shot</p><p class="score-details">after careful consideration, i have decided that the drink that best suits you is an espresso shot! this espresso shot has been carefully brewed to perfection using french roast arabica beans for that deep, potent flavor. strong, bold, and ambitious; this espresso is just like you. while some may find it too strong for their liking and may consider it bitter, your loved ones appreciate you and your bold personality.</p><a id="replay" class="take-quiz-btn" href="/test.php">order another drink?</a></div>';
            }
            elseif ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD) {
                  echo '<div class="quiz-overlay result maiden"></div><div class="results-text"><p class="you-chose">your drink is:</p><img src="dalgonacoffee.jpg" alt="dalgona coffee" class="results-img" /><div class="results test-results2"><p class="score">dalgona coffee</p><p class="score-details">after careful consideration, i have decided that the drink that best suits you is dalgona coffee! this dalgona coffee has been specially hand whipped and made with the perfect ratio of instant coffee and sugar and placed on top of a tall glass of cool milk. just like you, this dalgona coffee is sweet, trendy, unique, and very, very popular. </p><a id="replay" class="take-quiz-btn" href="/test.php">order another drink?</a></div>';
            }
            elseif ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC) {
                  echo '<div class="quiz-overlay result dio"></div><div class="results-text"><p class="you-chose">your drink is:</p><img src="icedamericano.jpg" alt="iced americano" class="results-img" /><div class="results test-results2"><p class="score">iced americano</p><p class="score-details">after careful consideration, i have decided that the drink that suits you the best is an iced americano! this iced americano was brewed with light roast peruvian beans for a lightly acidic and slightly floral taste. as one of the most simple items on our menu, this iced americano is easy to drink and will give you the energy boost that you need to get out of the house. just like you, this iced americano is relaxed and laidback. </p><a id="replay" class="take-quiz-btn" href="test.php">order another drink?</a></div>';
            }   
        ?>     
                </div>
            </div>
    

</body>
</html>