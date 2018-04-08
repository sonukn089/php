<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($name && $email && $password) {
		
		mysql_connect("localhost", "root", "") or die("We couldn't connect !");

		mysql_select_db("testsite");

		$username = mysql_query("SELECT name FROM users WHERE name='$name'");

		$count = mysql_num_rows($username);

		if ($count != 0) {
			
			include("links.php");

			die("Name already exists! please type another name");
		}

	 mysql_query("INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");

		$registered = mysql_affected_rows();

		echo "$registered row was inserted";
	}
	else{

		echo "You have to complete the form !";
	}

?>