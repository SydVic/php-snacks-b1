<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack2</title>
</head>
<body>

  <!-- ## Snack 2
  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
  <?php
  // parametri da chiedere all'utente
  $user_age = $_GET["age"];
  $user_name = $_GET["name"];
  $user_mail = $_GET["mail"];

  // verifiche da eseguire sui parametri
  $valid_age = is_numeric($user_age);
  var_dump($valid_age);

  $valid_name = (strlen($user_name) >= 3);
  var_dump($valid_name);

  $valid_mail = (strpos($user_mail, "@")) && (strpos($user_mail, "."));
  var_dump($valid_mail);

  // stampa del risultato
  $response = ($valid_age === true && $valid_name === true && $valid_mail === true) ? "Accesso riuscito" : "Accesso negato";
  echo $response;
  ?>
</body>
</html>