<!doctype html>
<html>
  <head>
    <title>order info submitted</title>
    <link href="./form.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>   
    <div class="navbar">
      <a href="index.php">messages</a>
      <a href="regulars.html">regulars</a>
      <a href="form.php">order</a>
      <a href="cafe.html">cafe</a>
      <a href="index.html">home</a>
    </div> 
    <?php
      $name = $_GET["name"].trim();
      $age = $_GET["age"].trim();
      $time = $_GET["time"].trim();
      ?>
      <?php
      $age1 = (int)$age;
      if (!empty($name) && !empty($age) && !empty($time) && $age1 < 13) {
        echo "<h3>hello, $name. sorry for the inconvenience, but you must be at least 13 years old to order and you are only $age years old. please try again later.</h3> <br>";
      
      ?>
      <div class="booton">
        <a href="form.php"><< return to form</a>
        </div>
       <?php  
      }
       elseif (!empty($name) && !empty($age) && !empty($time)) {
        echo "<h3>thank you for beginning your order, $name. we are excited to see you pick up your order at $time.</h3> <br>";
        ?>
        <div class="booton">
        <a href="quiz.php" > start your order</a>
        </div>
        <?php
      } else {
        echo "<h3>please complete the form to begin your order</h3> <br>"; 
        ?>     
        <div class="booton">
        <a href="form.php">try again</a>
        </div>
       <?php
      }
    ?>  
    
  
  </body>
</html>
