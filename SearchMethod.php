<?php
		//Takes in the user entered string
		$genre = empty($_POST['genre']) ? '' : $_POST['genre'];
	
		//Displays content depending on what user entered
		if ($genre == "country" || $genre == "Country") {
			require "Index.php";
			echo '<script>'
			, '$( "#content1" ).load( "Country.php" );'
			, '</script>'
			;
			exit;
		} else if ($genre == "hip hop" || $genre == "Hip hop" || $genre == "Hip Hop") {
			require "Index.php";
			echo '<script>'
			, '$( "#content1" ).load( "HipHop.php" );'
			, '</script>'
			;
			exit;
		} else {
			$error = "Invalid Search. Please try again.";
			require "Index.php";
		}		
?>