<!DOCTYPE html>
<html>
<head>
	<title>Data Base</title>
</head>
<body>
	<h2>Registration Form</h2>
	<form method="POST" action="insert.php">
		<table>
			<tr>
				<td>Name :</td>
				<td><input type="text" name="name" maxlength="15"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" name="email" maxlength="30"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" maxlength="15"></td>
			</tr>
			<tr>
				<td>Confirm Password :</td>
				<td><input type="password" name="cpassword" maxlength="15"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Register"></td>
			</tr>	
		</table>
	</form>
	<h3>
		<center>
			<?php include("links.php"); ?>
		</center>	
	</h3>

</body>
</html>