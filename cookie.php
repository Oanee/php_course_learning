<?php

$name = 'SomeName';
$value = 100;
$expiration = time() + (60 * 60 * 24);

setcookie($name, $value, $expiration);

?>

<!doctype html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<meta
		name='viewport'
		content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
	<meta http-equiv='X-UA-Compatible' content='ie=edge'>
	<title>Document</title>
</head>
<body>

<?php

if (isset($_COOKIE['SomeName'])) {
	$some_one =  $_COOKIE['SomeName'];
}

?>

</body>
</html>