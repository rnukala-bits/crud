<!DOCTYPE html>
<html>
<head>
	<title>MySQL Table Viewer</title>
</head>
<body>
	<h1>MySQL Table Viewer</h1>
<?php
// Define database connection variables
		$servername = "strangler.mysql.database.azure.com";
		$username = "root_admin";
		$password = "@Gdc$hht%1";
		$dbname = "strangler";
	$mysqli = new mysqli($servername,$username,$password,$dbname);

	if ($mysqli -> connect_errno) {
  		echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  		exit();
	}

	$sql = "SELECT * FROM employees";
	$result = $mysqli -> query($sql);

	// Fetch all
	$result -> fetch_all(MYSQLI_ASSOC);

	// Free result set
	$result -> free_result();

	$mysqli -> close();
?>
</body>
</html>
