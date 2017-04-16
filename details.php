<?php
	require_once('admin/phpscripts/init.php');
	
	if(isset($_GET['id'])) {
		$tblc = "tbl_comments";
		$tbl = "tbl_movies";
		$col = "movies_id";
		$colc = "mov_id";
		$id = $_GET['id'];
		$getSingle = getSingle($tbl, $tblc, $col, $colc, $id);

	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Details</title>
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/review.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/animate.css">
</head>
<body>
	<div class="row">
		<div class="small-12 small-centered con">
<?php

	if(!is_string($getSingle)){
		$row = mysqli_fetch_array($getSingle);
			echo "<div class=\"\"><div class=\"small-12 text-center columns\"><img src=\"images/{$row['movies_thumb']}\" alt=\"{$row['movies_title']}\">
				 <h2>{$row['movies_title']}</h2>
				 <p>{$row['movies_year']}</p><br>
				 <p>{$row['movies_storyline']}</p><br>
				
				 <a href=\"index.php\">Back...</a><br><br>";
		
	}else{
		echo "<p>{$getSingle}</p>";	
	}

?>
<h2 class="text-center">Comments/Reviews</h2>
<?php	
	$connect = mysqli_connect("localhost","root","","db_review");
	$sql2 = "SELECT * FROM tbl_comments";
	$result2 = mysqli_query($connect, $sql2);
	
	while($row = mysqli_fetch_array($result2))
		{
			//echo "<h2 class=\"text-center \">Comments/Reviews</h2>";
			echo "<div class=\"results\"><p class=\"text-center \">".$row["movie_comment"]."<p2>";
		}
?>
	</div>	
</div>

<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/what-input.min.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
