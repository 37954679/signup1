<?php
session_start()

//include("connection.php");
include("fuction.php");

$user_data=check_login($con);

?>
<!doctype html>
<html>
<head>
	<title>my website</title>
</head>
<body>
	<a href="logut.php">logout</a>
	<h1>this is the index page</h1>
	<br>
	hello,welcome.
</body>
</html>