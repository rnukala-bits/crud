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

	$test_query = "SHOW TABLES FROM $dbname";
	$result = mysqli_query($link, $test_query);

	$tblCnt = 0;
	while($tbl = mysqli_fetch_array($result)) {
	$tblCnt++;
	#echo $tbl[0]."<br />\n";
	}

	if (!$tblCnt) {
	echo "There are no tables<br />\n";
	} else {
	echo "There are $tblCnt tables<br />\n";
	} 
?>
</body>
</html>
