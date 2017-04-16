<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	require_once('phpscripts/init.php');
	//confirm_logged();
	$tbl = "tbl_user";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete User</title>
</head>
	
<body>
	<h1>Delete User</h1>
	<?php
		while($row = mysqli_fetch_array($users)){
			echo "{$row['user_name']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Delete User</a><br>";
		}

	?>	
</body>
</html>