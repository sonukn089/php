<?php
	
	 $x = 1;  // global scope

	function mytest1(){

		$x = 5;
		echo $x; // local scope
	}

	mytest1();



?>