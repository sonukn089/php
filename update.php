<?php

	mysql_connect("localhost", "root", "") or die("problem with connection...");

	mysql_select_db("testsite");

	$result = mysql_query(SELECT * FROM users);

	echo "<table width=\"90%\" align=center border=2>";
	echo "<tr><td width=\"40%\" align=center bgcolor=\"FFFF00\">ID</td>
		 <td width==\"40%\" align=center bgcolor=\"FFFF00\">NAME</td>
		 <td width==\"40%\" align=center bgcolor=\"FFFF00\">EMAIL</td>
		 <td width==\"40%\" align=center bgcolor=\"FFFF00\">PASSWORD</td></tr>";


	while ($row=mysql_fetch_array($result)) {
		
		 $id=$row['id'];
		 $name=$row['name'];
		 $email=$email['email'];
		 $password=$password['password'];

		 echo "<tr><td align=center>
		 	  <a href=\edit.php?id=$id&name=$name&email=$email&password=$password\">$id</a></td>
		 	  <td>$name</td><td>$email</td><td>$password</td></tr>";	
	}	 

	echo "</table>";

	mysql_close();



?>