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
   * Logical operators
   * 
   * AND --- Both X and Y are true
   * && --- Both X and Y are true
   * OR --- Either X or Y are true
   * || --- Either X or Y are true
   * XOR --- Either X or Y are true, not both
   * ! --- True if X is not true
   * 1 = True --- 0 = False
   */
  $x = 5;
  $y = 10;

  if ($x == $y and 1 == 1) {
    echo "True";
  } else {
    echo "False";
  }
  ?>
</body>

</html>