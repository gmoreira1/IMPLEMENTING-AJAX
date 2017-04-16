<?php
	require_once("phpscripts/init.php");
	//confirm_logged_in();
	
	if(isset($_POST['submit'])) {
		//echo "works";
		//password creator
		//if(isset($_POST['passwordCreator'])) {
				$upperCase = "ABCDEFGHIJKLMNOPQRSTUZWXYZ";
				$lowerCase = "abcdefghijklmnopqrstuvwxyz";
				$numbers = "0123456789";
				$specialChars = "!@#$%&?";
				
				$outputUpperCase = substr(str_shuffle($upperCase),0,2);
				$outputLowerCase = substr(str_shuffle($lowerCase),0,2);
				$outputNumbers = substr(str_shuffle($numbers),0,2);
				$outputSpecialChars = substr(str_shuffle($specialChars),0,2);
				
				$outputPass ="$outputUpperCase$outputLowerCase$outputNumbers$outputSpecialChars";
				
				$passShuffle = substr(str_shuffle($outputPass),0,8);
				//echo $password . "<br>";
				
				//password encrytor
				$password=md5($passShuffle);
				//echo $pwd;
				//}
	
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		//$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$level = $_POST['lvllist'];
		
		if(empty($level)) {
			$message = "Please select a user level.";
		}else{
			//echo "all good...";
	$result = createUser($fname, $lname, $username, $password, $email, $level);
			$message = $result;
			//email was semi successful. godaddy wouldn't cooperate. tried various solutions with no limited results
			$to = $email;
			$subject = "Username and password";
			$body = "Your user name is ". $username . "<br><br> Your password is ". $passShuffle. "<br><br>Go to your login page <a href='www.url.com'>Login</a>";
			$header = " From: Automatic User Information Email";
			
			if(mail($to, $subject, $body, $header)) {
				echo "Email has been sent to " . $to;
			}else{
				echo "There was and error";
			}
		}
		
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create New User</title>
<link rel="stylesheet" href="css/main.css" type="text/css">
</head> 
<body>
	<h1>Create User</h1>
    <?php if(!empty($message)){echo $message;} ?>
	<form action="admin_createuser.php" method="post">
		<label>First Name:</label>
        <input type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;} ?>"><br>
        <label>Last Name:</label>
        <input type="text" name="lname" value="<?php if(!empty($lname)){echo $lname;} ?>"><br>
        <label>Username:</label>
        <input type="text" name="username" value="<?php if(!empty($username)){echo $username;} ?>"><br>
        <!--<input type="submit" name="passwordCreator" value="Password Creator">
        <input type="text" name="password" value="?php if(!empty($password)){echo $password;} ?">-->
		<label>Email:</label>
		 <input type="email" name="email" value="<?php if(!empty($password)){echo $email;} ?>"><br><br>
		<select name="lvllist">
        	<option value="">Please select a user level...</option>
        	<option value="2">Web Admin</option>
            <option value="1">Web Master</option>
        </select>
        <br>
		<p>Your password will be created by the system and sent to you via email.</p>
        <input type="submit" name="submit" value="Create User">
	</form>
</body>
</html>