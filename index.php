<?php
	
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	
	require_once('admin/phpscripts/init.php');
		
	if(isset($_GET['filter'])) {
		$tbl1 = "tbl_movies";
		$tbl2 = "tbl_cat";
		$tbl3 = "tbl_l_mc";
		$col1 = "movies_id";
		$col2 = "cat_id";
		$col3 = "cat_name";
		$filter = $_GET['filter'];
		$getMovies = filterType($tbl1, $tbl2, $tbl3, $col1, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_movies";
		$getMovies = getAll($tbl);
	}

	//function setComments(){
				//require_once('search.php');
		if(isset($_POST['commentSubmit'])){
			$connect = mysqli_connect("localhost","root","","db_review");
			//echo "Legendary!";
			$movies_title = trim($_POST['title']);
			$message = trim($_POST['name']);
			$sql2 = "INSERT INTO tbl_comments VALUES(NULL,'{$movies_title}','{$message}')";
			$result2 = mysqli_query($connect, $sql2);
		//}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to the Finest Selection of Blu-rays on the internets!</title>
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/review.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/animate.css">


<script type="text/javascript">
		function getMov(value) {
			//if(value = ''){}else{
			$.post("search.php", {search:value},function(data) {
			$("#results").html(data);
			});
		}

	</script>

</head>
<body>

	<div id="corp" class="row">
		<h1 class="text-center">Movie Search</h1>
<?php

	include('includes/nav.html');

?>
		<div class="small-6 small-centered columns">
		<input type="text" class="small-6 text-center small-centered columns" placeholder="Live Trailer Search by Movie or Genre" onkeyup="getMov(this.value)">
		</div>
		
		<div id="results" class="results small-12 small-centered">
		</div>
	</div>


<?php

	include('includes/title.html');
	
	if(!is_string($getMovies)){
		while($row = mysqli_fetch_array($getMovies)){
			echo "<div class=\"\"><div class=\"small-12 medium-6 text-center columns\"><img src=\"images/{$row['movies_thumb']}\" alt=\"{$row['movies_title']}\">
				 <h2>{$row['movies_title']}</h2>
				 <p>{$row['movies_year']}</p><br>
				 <a href=\"details.php?id={$row['movies_id']}\">More...</a><br><br></div></div><div></div>";
		}
	}else{
		echo "<div class=\"\"><div class=\small-12 medium-6\">{$getMovies}</div>}</div>";
	}
	
	
	
?>
<?php include('includes/footer.html');  include('includes/nav.html');	 ?>		

<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/what-input.min.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
