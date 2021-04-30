<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // Multidimensional arrays

  //Expensive
  //Audi, Mercedes, BMW

  //Inexpensive
  //Volvo, Ford, Toyota

  $cars = array(
    "Expensive" => array("Audi", "Mercedes", "BMW"),
    "Inexpensive" => array("Volvo", "Ford", "Toyota", array())
  );

  echo $cars["Expensive"][1] . "<br>" . $cars["Inexpensive"][0];
  ?>
</body>

</html>