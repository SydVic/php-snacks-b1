<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack4</title>
</head>
<body>
  <!-- ## Snack 4 (Bonus)
  Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
  <?php
  $random_number_array = [];

  while (count($random_number_array) <=14) {
    $random_number = rand(1, 100);

    if (!in_array($random_number, $random_number_array)) {
      $random_number_array[] = $random_number;
    }
  }

  var_dump($random_number_array);
  ?>
</body>
</html>