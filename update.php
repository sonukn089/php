<?php

	mysql_connect("localhost", "root", "") or die("problem with connection...");

	mysql_select_db("testsite");

	$result = mysql_query(SELECT * FROM users);

	echo "<table width=\"90%\" align=center border=2>";
	echo "<tr><td width=\"40%\" align=center bgcolor=\"FFFF00\">ID</td>



?>