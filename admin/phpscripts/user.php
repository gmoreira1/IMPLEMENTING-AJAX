<?php
	
	function editUser($id, $fname, $lname, $username, $password) {
		include("connect.php");
		$updatestring = "UPDATE tbl_user SET user_fname='{$fname}', user_lname='{$lname}',user_name='{$username}',user_pass='{$password}' WHERE user_id={$id}";
		$updatequery = mysqli_query($link, $updatestring);
		
		if($updatequery) {
			redirect_to("admin_index.php");
		}else{
			$message = "Not going to happen!";
			return $message;
		}
		
		mysqli_close($link);	
	}


	function getUser($id) {
		require_once("connect.php");
		$userstring = "SELECT * FROM tbl_user WHERE user_id={$id}";
		$userquery = mysqli_query($link, $userstring);
		if($userquery){
			$found_user = mysqli_fetch_array($userquery, MYSQLI_ASSOC);
			return $found_user;
		}else{
			$message = "There was a problem finding your account.  Please return all of your access cards to the front desk and get the F out!";
			return $message;
		//return
		}
		mysqli_close($link);	
	}

	function createUser($fname, $lname, $username, $password, $email, $level) {
		require_once("connect.php");
		$ip = 0;
		$userstring = "INSERT INTO tbl_user VALUES(NULL,'{$fname}','{$lname}','{$username}','{$password}','{$email}','{$level}','{$ip}')";
		//echo $userstring;
		$userquery = mysqli_query($link, $userstring);
		if($userquery) {
			redirect_to("admin_index.php");
		}else{
			$message = "Your hiring practices have failed you, we can not keep this individual.";
			return $message;
		}
		mysqli_close($link);
	}

	function deleteUser($id) {
		include("connect.php");
		$delstring = "DELETE FROM tbl_user WHERE user_id={$id}";
		echo $delstring;
		$delquery = mysqli_query($link, $delstring);

		if($delquery){
			redirect_to("../admin_index.php");
		}else{
			echo "This person is protected...";
		}

		mysqli_close($link);
	}
?>