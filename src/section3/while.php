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


  // Inicialization, Evaluated once at the beginning
  // Condition, Option 1 - If its true, excute
  // Option 2 - If its false, stop
  // Counter, Evaluated at the end of every loop

  for ($i = 1; $i <= 10; $i++) {
    echo "The number is: " . $i . "<br>";
  }

  /**
   * Going to the bank on the 1st of January
   * Want to deposit 100 dollars
   * Interest rate is 5%
   * Withdrawl it after 5 years
   */

  $deposit = 1000;
  $interest = 0.05;

  for ($years = 1; $years <= 5; $years++) {
    $deposit += ($deposit * $interest);
    echo "The total amount after " . $years . " year is: " . $deposit . "<br>";
  }
  ?>
</body>

</html>