<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // Comparison operators
  $x = 10;
  $y = 15;

  // Spaceship <=>
  // If the value on the left is less than tha value on the right, the system will return a -1.
  // If the value on the left is equal to the value on the right, the system will return a 0.
  // If the value on the left is greater than the value on the right, the system will return a 1.
  1 <=> 2; // return -1;

  // <, >, ==, !=, <>, ===, <=, >=
  if ($x == $y) {
    echo "This is true";
  } else {
    echo "This is false";
  }
  ?>
</body>

</html>