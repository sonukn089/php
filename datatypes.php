<!DOCTYPE html>
<html>
<head>
	<title>Data Types</title>
</head>
<body>
	<?php
	 
		// A string is a sequence of characters, like "Hello world!".
		$x = "Hello world!";
		$y = 'Hello world!';

		echo $x;
		echo "<br>"; 
		echo $y;
		echo "<br>";
		$a = 45;

		var_dump($a);
		echo "<br>";

		$b = 50.45;
		var_dump($b);
		echo "<br>";

		$car = array("volvo","BMW", "Toyota");

		var_dump($car);
		echo "<br>";

		class Car {

			function Car(){

				$this->model = "V W";
			}
		}
		// create an object

		$herebie = new Car();

		// show object properties

		echo $herebie->model;






	?>

</body>
</html>