<?php

	// echo $_POST['name'] . "<br/>";
	// echo $_POST['email'] . "<br/>";
	// echo $_POST['address'] . "<br/>";
	// echo $_POST['city'] . "<br/>";
	// echo $_POST['password'] . "<br/>";
	// echo $_POST['confirmpassword']


	if ( $_POST['name'] ) {

		if ( $_POST['email'] ) {
			
			if ( $_POST['address'] ) {
				
				if ($_POST['city'] ) {
					
					if ($_POST['password'] ) {
						
						if ($_POST['confirmpassword'] ) {
							
							if ($_POST['password'] == $_POST['confirmpassword']) {
								echo "Your form has been sent succussfully !";
							}
							else{
								echo "Your passwords don't match";
							}

						}
						else{
							echo "You have to confirm your password";
						}
					}
					else{
						echo "You have to type a password";
					}

				}
				else{
					echo "You have to type a city";
				}
			}
			else{
				echo "You have to type a address";
			}
		}
		else{
			echo "You have to type a email";
		}
	}
	else{
		echo "You have to type a name";
	}
	

?>