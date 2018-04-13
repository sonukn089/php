<?php

	// $x = 1; // global scope
	// function test(){
	// 	$x = 5;
	// 	echo $x;
	// }
	// test();
	
	$x = 5; // global scope

	function myTest() {
    	// using x inside this function will generate an error
    	echo "<p>Variable x inside function is: $x</p>";
	} 
	myTest();

	echo "<p>Variable x outside function is: $x</p>";

	echo "<br>";

	function myTest1() {
    	$x = 5; // local scope
    	echo "<p>Variable x inside function is: $x</p>";
	} 
	myTest1();

	// using x outside the function will generate an error
	echo "<p>Variable x outside function is: $x</p>";

	echo "<br>";

	//The global keyword is used to access a global variable from within a function.
	//To do this, use the global keyword before the variables (inside the function):
	
	$x = 5;
	$y = 10;

	function myTest2() {
    	global $x, $y;
    	$y = $x + $y;
	}

	myTest2();
	echo $y; // outputs 15
?>