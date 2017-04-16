<?php
	
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}
	
	function addMovie($fimg,$thumb,$title,$year,$storyline,$runtime,$trailer,$price,$cat){
		include("connect.php");
		//echo "from addMovie()";
		//runs through and cancels characters to create a literal string. do this for others
		$fimg = mysqli_real_escape_string($link, $fimg);
		
		if($_FILES['movie_fimg']['type'] == "image/jpg" || $_FILES['movie_fimg']['type'] == "image/jpeg"){
		//echo "This is a jpg or jpeg";	
		$targetpath = "../images/{$fimg}";
			if(move_uploaded_file($_FILES['movie_fimg']['tmp_name'], $targetpath)){
				//echo "file moved.";
				//check to see if file actually went in directory
				$orig = "../images/{$fimg}";
				$th_copy = "../images/{$thumb}";
				if (!copy($orig, $th_copy)) {
					echo "failed to copy.";
					}
					
					$size = getimagesize($orig);
					echo $size[0]." x ".$size[1];
				}
		
		
		
		
			}else{
				echo "No f'n gifs";
			}
		
		mysqli_close($link);
		}
	
?>