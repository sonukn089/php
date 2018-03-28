<!DOCTYPE html>
<html>
<head>
	<title>Constant</title>
</head>
<body>

	<?php

		define("GREETING", "Welcome to W3school.com");

		echo GREETING;

		echo "<hr>";
		define("GREETING", "Welcome to W3Schools.com!",true);
		echo greeting;

		include_once 'index.php';

		
	?>

</body>
</html>