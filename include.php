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

	require_once ("MultidimensionalArray.php");

	echo "<h2>require once again but it is not working</h2>";

	require_once ("MultidimensionalArray.php");
?>