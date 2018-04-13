<?php

	// $users = array("Victor" =>"Sonu", "Bill" =>"Pushpendra", "Monu" =>"Neeraj Singh", "AA"=>"S");

	// echo $users["Victor"];
	// echo "<br>";
	// echo $users["Bill"];
	// echo "<br>";
	// echo $users["Monu"];
	// echo "<br>";
	// echo $users["AA"];
	//               index-0     index-1         index-1 ka 0
	$students = array("Victor", array("30", array("boy","girl", array("boy","tt") )));


	echo $students[1][1][2][0]; 

	echo "<br>";
	$students = array("Victor");

	echo $students[0][3];

?>