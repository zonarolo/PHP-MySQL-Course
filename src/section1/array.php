<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $cars1 = "BMW";
  $cars2 = "AUDI";
  $cars3 = "Mercedes";

  $cars = array("BMW", "AUDI", "Mercedes");
  echo $cars[2] . '<br>';

  $myCar = array("BMW", 2015, 75.304);

  var_dump($myCar);
  echo "<br>";
  print_r($myCar);
  echo "<br>";

  $cars4 = array("Volve", "Chevy", "Volkswagen");

  $cars = array_merge($cars, $cars4);
  print_r($cars) . '<br>';
  ?>
</body>

</html>