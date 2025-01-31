<?php require_once "./FizzBuzz.php" ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>FizzBuzz</title>
</head>
<body>
<?php
	$fizz = new FizzBuzz();
	$fizz->setNum( 650 );
	echo $fizz->fizzBuzz();
?>
</body>
</html>
