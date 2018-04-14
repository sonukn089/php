<?php
	echo "<h1>this is the included the all file.</h1>";
	include("home.php");
	echo "<hr>";
	include ("logical.php");
	echo "<hr>";
	echo "<h1>this is the Required the all file.</h1>";
	require ("loop.php");
	echo "<hr>";
	require ("array.php");
	echo "<hr>";
	
	include ("MultidimensionalArray.php");

?>