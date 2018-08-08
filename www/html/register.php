<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}


if(isset($_POST['btn-signup']))
{
require_once('C:/xampp/htdocs/dbconnect.php');


	$uname = mysqli_real_escape_string($conn,$_POST['uname']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$upass = mysqli_real_escape_string($conn,$_POST['pass']);

	$uname = trim($uname);
	$email = trim($email);
	$upass = trim($upass);

	// email exist or not
	$query ="SELECT email FROM users WHERE email='$email'";
	$stmt = mysqli_query($conn, $query);
	

	$count = mysqli_affected_rows($conn);// if email not found then register

	//$reg = mysqli_query($conn,"INSERT INTO users(user_name, email, user_pass) VALUES('$uname','$email','$upass')");
	//echo ("count: "+mysqli_affected_rows($stmt));
	
	if($count == 0){
		if(mysqli_query($conn,"INSERT INTO users(user_name, email, user_pass) VALUES('$uname','$email','$upass')"))
		{
			?>
			<script>alert('successfully registered ');</script>
			<?php
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php  
		}
	}
	else{
			?>
			<script>alert('Sorry Email ID already taken ...');</script>
			<?php
	}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="uname" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="index.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
