<!-- ## Snack 2Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack02</title>
</head>
<body>
  <?php 
  // GET
  $name = $_GET["name"];
  $email = $_GET["email"];
  $age = $_GET["age"];

  //NAME
  $name_length_bool = strlen($name) > 3;
  var_dump($name_length_bool);

  // EMAIL
  $at_position = strpos($email, "@");
  $point_position = strpos($email, ".");
  $is_email_valid = $at_position && $point_position;
  var_dump($is_email_valid);

  //AGE
  $is_age_int = is_numeric($age);
  var_dump($is_age_int);
  var_dump($age)

  ?>

  <?php 
  if ($name_length_bool === false || $is_email_valid === false || $is_age_int === false)
  { ?>
  <h2>Accesso negato</h2>
<?php } else { ?> 
  <h2>Accesso riuscito</h2>
<?php } ?>
</body>
</html>