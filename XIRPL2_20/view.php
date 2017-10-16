<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP SUCCESS</title>
</head>
<body>
<p align="center"><font size="5px"><b>SIGNUP SUCCESS</b></font></p>
	<table align="center">
		<tr>
			<td>Mobile Number or Email</td><td>:</td><td><?php echo $_POST["email"]; ?></td>
		</tr>
		<tr>
			<td>Full Name</td><td>:</td><td><?php echo $_POST["nama"]; ?></td>
		</tr>
		<tr>
			<td>Username</td><td>:</td><td><?php echo $_POST["username"]; ?></td>
		</tr>
		<tr>
			<td>Password</td><td>:</td><td><?php echo $_POST["password"]; ?></td>
		</tr>
		</table>
</body>
</html>