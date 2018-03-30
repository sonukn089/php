<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>

	<form method="post" action="process.php">
		<table>	
			<tr>
				<td>Name :</td>
				<td><input type="text" name="name" placeholder="name"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" name="email" placeholder="email address"></td>
			</tr>
			
			<tr>
				<td>Address :</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td>City :</td>
				<td><input type="text" name="city" placeholder="city"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Confirmation Passord :</td>
				<td><input type="password" name="confirmpassword"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>	
		</table>

	</form>

</body>
</html>