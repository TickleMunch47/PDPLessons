
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php

include ('includes/header.php'); 

?>
      
      <?php
      //While Loop
      $x = 3;
      while ($x <= 7) {
        echo "hi there.<br>";
        $x++;
      };
      ?>

      <?php
      //Do while loop
      $x = 3;
      do {
        echo "hi, Greetings!<br>";
        $x++;
      }
      while ($x <= 4);
      ?>

      <?php
      //For Loop
      for ($x = 3; $x <= 10; $x++) {
        echo "Hola!!<br>";
      };
      ?>

      <?php
      //Foreach loop
      $array = array("Liam","Jane Claire","Micah","Mady");

      foreach ($array as $loopdata) {
        echo "My name is ".$loopdata. ".<br>";
      }

      ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>