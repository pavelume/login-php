<?php 

/*
Description: creating index page and makeing sure login if not then you can't go next 
autho: Mahmudul Islam

*/
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>Welcome to homepage.</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>