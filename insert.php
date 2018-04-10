<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if ($name && $email && $password && $cpassword) {

		if (strlen($password) > 3) {

			if ($password == $cpassword) {
			
				mysql_connect("localhost", "root", "") or die("We couldn't connect !");

				mysql_select_db("testsite");

				$username = mysql_query("SELECT name FROM users WHERE name='$name'");

				$count = mysql_num_rows($username);

				$remail = mysql_query("SELECT email FROM users WHERE email='$email'");

				$checkmail = mysql_num_rows($remail);

				if ($checkmail != 0) {
					
					echo "<b>This email is already registered! Please type another email</b>";

				}
				else{

					if ($count != 0) {
						// 	include("links.php");
						// 	die("<b>ERROR: Name already exists! please type another name</b>");
						// }
						echo "<b>This name is already registered! Please type another name</b>";
		 				mysql_query("INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");

						$registered = mysql_affected_rows();
						
						echo "<b>You have successfuly registered</b>";
					}
				}
			}
			else{

				echo "<b>Your passwords don't match</b>";
			}
		}
		else{

			echo "<b>Your password is too short! you need to type a password between 4 and 15 characters</b>";
		}

	}

	else{

		echo "You have to complete the form !";
	}

?>