<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    /**
     * Conditional Statement
     * If statement
     * Else statement
     * Else if statement
     * Swith statement
    */

    $age = 20;

    if ($age < 20) {
      echo "Sorry, you are too young!";
    } elseif ($age > 50) {
      echo "You are too old to party";
    } elseif ($age < 10) {
      echo "You need to be in bed!";
    } elseif ($age > 18 && $age < 21){
      echo "You are not allowed to drink!";
    } else {
      echo "You are old enough to go out.";
    }


  ?>
</body>
</html>