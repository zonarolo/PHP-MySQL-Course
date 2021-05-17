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
   * While loop - Don't know the number of iterations
   * Do-while loop - First Do then While
   * For loop
   * Foreach loop
   */

  $x = 1;

  while ($x <= 10) {
    echo $x . "<br>";
    $x++;
  }


  $cookie = 1;
  do {
    echo "I love cookies! <br>";
    $cookie++;
  } while ($cookie < 1);

  ?>
</body>

</html>