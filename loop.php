<?php 

	// while loop
	$i = 0;
	
	while ($i <= 10) {
		
		echo $i++."<br>";
	}

	echo "<br>";
	echo "<hr>";

	// do while loop
	$j = 0;

	do
	{

		echo $j++."<br>";
	}
	while ($j <= 10);

	echo "<br>";
	echo "<hr>";

	// for loop
	$n = 1;

	for ($i = 1; $i < 10; $i++) { 
		
		echo "the number is : " . $i . "<br>";
	}

	echo "<br>";
	echo "<hr>";

	// foreach loop
	$s = array("Sonu", "Monu", "Pushpendra","Neeraj");

	foreach ($s as $value){
		
		echo $value. "<br>";
	}

	echo "<br>";
	echo "<hr>";

	// foreach loop
	
	$a = array("Sonu", "Monu", "Pushpendra","Neeraj");

	foreach ($a as $key => $value) {

		echo $value. "<br>";
	}

	echo "<br>";
	echo "<hr>";

	// foreach loop
	
	$a = array("Sonu" =>"Hello", "Monu"=>"Hi", "Pushpendra"=>"Bye","Neeraj"=>"Fine");

	foreach ($a as $key => $value) {
		
		echo $value. "<br>";
	}
 ?>