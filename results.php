<!doctype html>
<html>
  <head>
    <title>messages</title>
    <link href="./message.css" rel="stylesheet" />
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
    <div class="message-board">
      <h1>messages</h1>
    <?php
      $xml=simplexml_load_file("info.xml");
      foreach($xml->children() as $message){
      foreach($message->children() as $child)
         {
            echo $child->getName() . ": " . $child . "<br>";
         }
      echo"<br>";
      }

    ?>
    </div>
  </body>

</html>