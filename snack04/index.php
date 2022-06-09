<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

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
  <title>Snack04</title>
</head>
<body>
  <?php
  $numbers_array = [];
  while (count($numbers_array) < 15) {
  	$random_number = rand(1, 100);
  	if (!in_array($random_number, $numbers_array)) {
  		$numbers_array[] = $random_number;
  	}
  }

  var_dump($numbers_array);
  ?>
</body>
</html>