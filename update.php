<?php

	mysql_connect("localhost", "root", "") or die("problem with connection...");

	mysql_select_db("testsite");

	$result = mysql_query(SELECT * FROM users);

?>