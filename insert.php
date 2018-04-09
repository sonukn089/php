<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if ($name && $email && $password && $cpassword) {

		if ($password == $cpassword) {
		
			mysql_connect("localhost", "root", "") or die("We couldn't connect !");

			mysql_select_db("testsite");

			$username = mysql_query("SELECT name FROM users WHERE name='$name'");

			$count = mysql_num_rows($username);

			if ($count != 0) {
			
				include("links.php");

				die("<b>ERROR: Name already exists! please type another name</b>");
			}

	 		mysql_query("INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");

			$registered = mysql_affected_rows();

			echo "<b>You have successfuly registered</b>";
		}
		else{


		}
	}
	else{

		echo "You have to complete the form !";
	}

?>