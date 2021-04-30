<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // Exercice 1: 
  $x = 2;
  $y = 3;
  $z = $x + $y * 5;

  echo "Exercice 1: The total is $z <br>";
  echo "<hr>";
  // Exercice 2:
  $price = 100;
  $vat = 0.21;
  $totalPrice = ($price * $vat) + $price;

  echo "Exercice 2: Price - $price , Vat - $vat , Total price - $totalPrice <br>";

  echo "<hr>";

  // Exercice 3:
  $xx = 4;
  $yy = 7;
  $zz = 13;

  $average = number_format($xx + $yy + $zz / 3, 2, '.', ',');
  echo "Exercice 3: The average is $average <br>";
  echo "<hr>";
  // Exercice 4:
  $countries = array(
    "Netherlands" => "Amsterdam",
    "Germany" => "Berlin",
    "Thailand" => "Bangkok",
    "Spain" => "Madrid",
    "Venezuela" => "Caracas"
  );

  echo "Exercice 4:<br>";

  foreach ($countries as $key => $value) {
    echo "The capital of $key is $value <br>";
  }
  echo "<hr>";
  // Exercice 5:
  $cm = 20;
  $cmToInch = number_format($cm * 0.3937008 / 1, 2, '.', ',');

  echo "Exercice 5: $cm centimeters is $cmToInch inches. <br>";
  echo "<hr>";
  // Exercice 6:
  $expenses = array(40, 70, 50, 30, 20);

  $totalAmount = 0;
  $amountOfExpenses = 0;

  foreach ($expenses as $expense) {
    $totalAmount = $expense + $totalAmount;
    $amountOfExpenses += 1;
  }
  echo "Exercice 6: My $amountOfExpenses biggest expenses were $totalAmount <br>";
  echo "<hr>";
  // Exercice 7:

  $weather = array("Rain", "Sunshine", "Clouds", "Hail", "Sleet", "Snow", "Wind");

  echo "Exercice 7: We've seen all kinds of weather this month. At the beginning of the month, we had $weather[5] and $weather[6]. Then came $weather[1] with few $weather[2] and some $weather[0]. At least we didn't get any $weather[3] or $weather[4] <br>";
  ?>
</body>

</html>