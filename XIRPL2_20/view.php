<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP SUCCESS</title>
</head>
<body>
<?php 
$host ="localhost";
$user="root";
$password="";
$mobile_email=$_POST['email'];
$fullname=$_POST['nama'];
$username=$_POST['username'];
$pssword=$_POST['pssword'];

$con=mysqli_connect($host,$user,$password);
mysqli_select_db ($con,'formig');
$sql="insert into tbformig values ('$mobile_email','$fullname','$username','$pssword')";
$hasil=mysqli_query ($con,$sql);

 ?>
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
