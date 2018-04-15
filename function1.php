<?php
	
	 $x = 1;  // global scope

	function mytest1(){

		$x = 5;
		echo $x; // local vaiable for function
	}

	mytest1();



?>