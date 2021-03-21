<!doctype html>
<html>
  <head>
    <title>message board</title>
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
      <a href="index.html">home</a>>
    </div> 
    <div class="name">
      <h1>message board</h1> 
      <h3>here's a place where you can share your thoughts. why don't you try posting a thought or two?</h3>  
    </div>
  <?php
  if(isset($_REQUEST['ok'])){
    $xml = new DOMDocument("1.0", "UTF-8");
    $xml-> load("info.xml");

    $rootTag = $xml->getElementsByTagName("document")->item(0);

    $messageTag = $xml->createElement("message");

    $nameTag = $xml->createElement("name", $_REQUEST['name']);
    $ageTag = $xml->createElement("time", $_REQUEST['time']);
    $timeTag = $xml->createElement("message", $_REQUEST['message']);
   

    $messageTag->appendChild($nameTag);
    $messageTag->appendChild($ageTag);
    $messageTag->appendChild($timeTag);

    $rootTag->appendChild($messageTag);

    $xml->save('info.xml');

    header("Location: results.php");
  }

  if(isset($_REQUEST['check'])){
    header("Location: results.php");
  }
  ?>
    <form action = "index.php" method = "post">
    <label>name: <input type = "text" name = "name" placeholder="jade wang"/> </label>
    <label>time: <input type = "text" name = "time" placeholder="1/18/2021 3:23PM PST" /> </label>
    <label> message: <input type = "text" name = "message" placeholder="hi, how are you all doing today? :)" style="height:200px"/> </label>
    <input type = "submit" name = "ok" value = "submit"/>
    </form>
    

  </body>
</html>