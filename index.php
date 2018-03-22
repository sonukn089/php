<!DOCTYPE html>
<html>
<head>
	<title>PHP PAGE</title>
</head>
<body>

	<h1 style="color: red;">My first page!</h1>

	<?php

		echo "Hello Sonu !";
		echo "<br>";
		echo "Hello Monu !";
		echo "<br>";
		echo "Hello Pushpender !";
		echo "<br>";
		echo "Hello Neeraj !";
		echo "<br>";
		echo "Hello Satyendra !";
		echo "<br>";
		echo "Hello Akash !";
		echo "<br>";
		echo "Hello Vipin !";
		echo "<br>";
		echo "Hello Rahul !";
		echo "<br>";
		echo "Hello Abhihek !";
		echo "<br>";
		echo "Hello Sarthak !";
		echo "<br>";
		echo "Hello Anand !";
		echo "My first PHP script!";

	?>
	<hr>
	<h1>An array stores multiple values</h1>
	<?php
		$txt = "Hello world!";
		$x = 5;
		$y = 10.5;
		echo $txt;
		echo "<br>";
		echo $x;
		echo "<br>";
		echo $y;
	?>
	<hr>
	<?php
		$txt = "Welcome to";
		echo $txt ." php ";

	?>
	<hr>
	<?php
		$txt = "php";

		echo "I love " . $txt . "!";
	?>
	<hr>
	<?php

		$x = 5;
		$y = 4;
		echo $x + $y . " !";
	?>
	<hr>
	<?php
		$x = 10; // global scope
 
		function myTest() {
    		// using x inside this function will generate an error
    		echo "<p>Variable x inside function is: $x</p>";
		} 
		myTest();

		echo "<p>Variable x outside function is: $x</p>";
	?>
	<hr>
	<?php

		function ourTest() {
    		$x = 5; // local scope
    		echo "<p>Variable x inside function is: $x</p>";
		} 
		ourTest();
			// using x outside the function will generate an error
			echo "<p>Variable x outside function is: $x</p>";
	?>


</body>
</html>


