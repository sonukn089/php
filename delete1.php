<?php
	
	mysql_connect("localhost", "root", "") or die("problem with connection...");

	mysql_select_db("testsite");

	$result = mysql_query("SELECT * FROM users WHERE id='".$_REQUEST['ids']."'");

	echo "<table width=\"75%\" align=center border=2>";

	echo "<tr><td width=\"20%\" align=center bgcolor=\"FFFF00\">ID</td>
		 <td width==\"30%\" align=center bgcolor=\"FFFF00\">NAME</td>
		 <td width==\"30%\" align=center bgcolor=\"FFFF00\">EMAIL</td>
		 <td width==\"30%\" align=center bgcolor=\"FFFF00\">PASSWORD</td></tr>";

	while ($row = mysql_fetch_array($result)){
		//echo "<pre>";print_r($row);
		
		 $id=$row['id'];
		 $name=$row['name'];
		 $email=$row['email'];
		 $password=$row['password'];

		 echo "<tr><td align=center>$id</a></td>
		 <td>$name</td><td>$email</td><td>$password</td></tr>";	
	}	 

	echo "</table>";

	mysql_close();

	include("links.php");

?>

<form>
	
</form>