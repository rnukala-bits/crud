<!DOCTYPE html>
<html>
<head>
	<title>MySQL Table Viewer</title>
</head>
<body>
	<h1>MySQL Table Viewer</h1>
<?php
	# Fill our vars and run on cli
	# $ php -f db-connect-test.php
	$servername = 'strangler.mysql.database.azure.com';
	$username = 'root_admin';
	$password = '@Gdc$hht%1';
	$dbname = 'strangler';

	$link = mysqli_connect($servername, $username, $password) or die("Unable to Connect to '$servername'");
	mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

	$test_query = "select * from departments";
	
	$result = $link -> query($sql);

	// Fetch all
	$result -> fetch_all(MYSQLI_ASSOC);

	// Free result set
	$result -> free_result();

	$link -> close(); 
?>
</body>
</html>
