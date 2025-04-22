
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

        $x = 47
        case "2":
            echo "The answer is nay";
        break;

        if ($x == 1) {
            echo "Liam is logged in?";
        } 
        elseif ($x == 5) {
            echo "Liam is kinda handsome";
        }
        else {
            echo "Liam is very pretty";
        }

        switch ($x) {
            case "1":
                echo "The answer is nigh";
            break;
            case "2":
                echo "The answer is nay";
            break;
            case "3":
                echo "The answer is nope";
            break;
            case "4":
                echo "The answer is non";
            break;
            default:
            echo "Nada"
        }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>