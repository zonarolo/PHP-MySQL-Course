<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $cars = array("Audi" => 50.500, "BMW" => 40.700, "Mercedes" => 60.300);

  // $car1["Mercedes"] = 60.300;
  // echo $car1["Mercedes"];


  foreach ($cars as $key => $value) {
    echo "My $key  has $value mileage <br>";
  }
  ?>
</body>

</html>