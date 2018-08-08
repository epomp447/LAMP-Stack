<?php
session_start();
require_once ('C:/xampp/htdocs/dbconnect.php');

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
<title>Welcome - <?php echo $userRow['user_name']; ?></title>
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
	<div id="right">
    	<div id="content">
        	<a href="logout.php?logout">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>
	<div id="right">
    	<div id="content">
        	<a href="logout.php?logout">Data</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>
</div>

<div id="body">
<h2>Database</h2>
<iframe src= "" height="200" width="1000"></iframe>
<script>
var data = JSON.stringify(false);

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === this.DONE) {
    console.log(this.responseText);
  }
});

xhr.open("GET", "https://api.securitytrails.com/v1/ping?apikey=0rkV9wrAtOvgIrjQmfaaQKyxchPl1Lh0");

xhr.send(data);
</script>

</div>

</body>
</html>