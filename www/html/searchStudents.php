<html>
	<head>
		<title>Selecting Table in MySQLi Server</title>
	</head>

	<body>
		<?php

			r

			//create connection
			$conn = mysqli_connect($host, $username, $password, $dbname); 
			//check connection
			if (!$conn){
				die("Connection Failed: " . mysqli_connect_error()); 
			}

			echo 'Connection established<br>';
			$sql= 'SELECT * FROM users';
			$result = mysqli_query($conn,$sql);
	
	
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)){
				echo "user_Name: " . $row["user_name"]."<br>";
				echo "email: " . $row["email"]."<br>";
				echo "password: " . $row["user_pass"]."<br>";
			}
			}else{
				echo " 0 results";
			}
			mysqli_close($conn);

		?>
	</body>
</html>