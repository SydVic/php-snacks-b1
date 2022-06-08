<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>

  <!-- ## Snack 1 -->
  <!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->
  <!-- Olimpia Milano - Cantù | 55-60 -->

  <?php
    $matches= [
      [
        "home_team" => "Los Angeles Lakers",
        "home_team_score" => 92,
        "visiting_team" => "Chicago Bulls",
        "visiting_team_score" => 112
      ],
      [
        "home_team" => "New York Knicks",
        "home_team_score" => 95,
        "visiting_team" => "Miami Heat",
        "visiting_team_score" => 86
      ],
      [
        "home_team" => "Cleveland Cavaliers",
        "home_team_score" => 78,
        "visiting_team" => "Toronto Raptors",
        "visiting_team_score" => 91
      ]
    ];
  ?>

  <ul>
    <?php for ($i = 0; $i < count($matches); $i++) {
      $current_match = $matches[$i];
    ?>
      <li>
        <?php echo $current_match["home_team"] . " - " . $current_match["visiting_team"] . " | " . $current_match["home_team_score"] . "-" . $current_match["visiting_team_score"] ?>
      </li>
      <?php } ?>
  </ul>
  
  

</body>
</html>