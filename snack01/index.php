<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.Olimpia Milano - Cantù | 55-60 -->

<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack01</title>
</head>
<body>
  <?php
  $matches = [
  	[
  		"teamA" => "Bergamo",
  		"teamB" => "Milano",
  		"teamA_score" => 55,
  		"teamB_score" => 58,
  	],

  	[
  		"teamA" => "Parma",
  		"teamB" => "Firenze",
  		"teamA_score" => 25,
  		"teamB_score" => 38,
  	],

  	[
  		"teamA" => "Napoli",
  		"teamB" => "Roma",
  		"teamA_score" => 65,
  		"teamB_score" => 43,
  	],
  ];

  var_dump($matches);
  ?>

  <?php for ($i = 0; $i < count($matches); $i++) {
  	$current_match = $matches[$i]; ?>

      <h3>
        <?php echo $current_match["teamA"] .
        	" - " .
        	$current_match["teamB"] .
        	" | " .
        	$current_match["teamA_score"] .
        	"-" .
        	$current_match["teamB_score"]; ?>
      </h3>

  <?php
  } ?>

</body>
</html>
