<?php
session_start();
require_once ('../dbconnect.php');

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysqli_query($conn,"SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['user_email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
	<div id="left">
    <label>Login</label>
    </div>
    <div id="right">
    	<div id="content">
        	Welcome <?php echo $userRow['user_name']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>

<div id="body">
<h2>Student Database</h2>
<iframe src= "http://169.254.57.207/getstudentinfo.php" height="200" width="1000"></iframe>

<h2>Links:</h2>
<a href="http://169.254.57.207/addstudent.php">Add to Student Database</a>
		

</div>

</body>
</html>