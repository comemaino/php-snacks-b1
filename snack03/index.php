<!-- ## Snack 3Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

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
  <title>Snack03</title>
</head>
<body>
<?php $posts = [
	[
		"date" => "10/01/2019",
		"content" => [
			"title" => "Post 1",
			"author" => "Michele Papagni",
			"text" => "Testo post 1",
		],
		[
			"title" => "Post 2",
			"author" => "Michele Papagni",
			"text" => "Testo post 2",
		],
	],

	[
		"date" => "10/02/2019",
		"content" => [
			"title" => "Post 3",
			"author" => "Michele Papagni",
			"text" => "Testo post 3",
		],
	],

	[
		"date" => "15/05/2019",
		"content" => [
			"title" => "Post 4",
			"author" => "Michele Papagni",
			"text" => "Testo post 4",
		],
		[
			"title" => "Post 5",
			"author" => "Michele Papagni",
			"text" => "Testo post 5",
		],
		[
			"title" => "Post 6",
			"author" => "Michele Papagni",
			"text" => "Testo post 6",
		],
	],
]; ?>

<ul>
<?php for ($i = 0; $i < count($posts); $i++) {
	$current_date = $posts[$i]; ?>

  <li> <?php echo "Date: " . $current_date["date"]; ?>
    <ul>
    <?php foreach ($current_date as $content) {
    	if (is_array($content)) { ?>
      <li> <?php echo $content["title"]; ?></li>
      <li> <?php echo $content["author"]; ?></li>
      <li> <?php echo $content["text"]; ?></li>
      </br>
      <?php } ?>
    </ul>
    
  </li>
  <?php
    } ?>
<?php
} ?>
</ul>



</body>
</html>
