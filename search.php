<?php

	$connect = mysqli_connect("localhost","root","","db_review");
	$search = $_POST['search'];
	$sql = "SELECT * FROM tbl_movies WHERE movies_title LIKE '%$search%' OR movies_genre LIKE '%$search%'";
	$result = mysqli_query($connect, $sql);

		while($row = mysqli_fetch_array($result))
		{
			//echo $row;
			echo "<div class=\"results\"><h2 class=\"text-center \">".$row["movies_title"]."</h2>";
			echo "<h2 class=\"text-center \">".$row["movies_genre"]."</h2>";
			
			echo "<div class=\"video small-12 small-centered \"><video class=\"small-12 small-centered float-center medium-8\" id=\"myvideo\" controls><source src=\"trailers/{$row['movies_trailer']}\" type=\"video/mp4\"></source></video>
					<div class=\"row small-12 small-centered float-center text-center controls container_video\">
					<input type=\"image\" src=\"images/play.png\" class=\"pPause first_button\" width=\"25\" height=\"25\" alt=\"first_image\">
					<button id=\"volDown\"><img src=\"images/volume-down.png\" class=\"button_work\" alt=\"volDown\" width=\"25\" height=\"25\"></button>
					<button id=\"volUp\"><img src=\"images/volume-up.png\" class=\"button_work\" alt=\"volUp\" width=\"25\" height=\"25\"></button>
					<button id=\"volMute\"><img src=\"images/mute.png\" class=\"button_work\" alt=\"volMute\" width=\"25\" height=\"25\"></button>
					</div></div>";
			
			echo "<p class=\"story small-12 text-center float-center small-centered columns\">".$row["movies_storyline"]."</p>";
			echo "<form class=\"small-6\" method=\"post\" action=\"index.php\"><br>
					<input type=\"text\" name=\"title\" value=".$row["movies_title"].">
					<textarea name=\"name\" class=\"name\" placeholder=\"Comment/Review\" rows=\"4\"></textarea><br>
					<input type=\"submit\" class=\"small-12 small-centered\" name=\"commentSubmit\" value=\"Submit Comment\"><br></form></div><br>
					<a href=\"#\" class=\"small-centered float-center text-center\"><b>BACK TO TOP</b></a>";
		
		}


?>
