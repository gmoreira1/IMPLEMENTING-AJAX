<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	require_once('phpscripts/init.php');
	//confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your Admin Panel</title>
<link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body>
	<h1>Welcome <?php //echo $_SESSION['users_name'];  ?> to your admin panel</h1>
    <a href="admin_createuser.php">Create New User</a>
    <a href="admin_edituser.php">Edit Account</a>
    <a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
</body>
</html>