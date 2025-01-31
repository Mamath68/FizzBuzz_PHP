<?php
	
	require_once './FizzBuzz.php';
	
	$fizzBuzz = new FizzBuzz();
	$fizzBuzz->setNum( 100 );

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
</head>
<body>

<h4><?= $fizzBuzz->fizzBuzz(); ?></h4>
</body>
</html>
