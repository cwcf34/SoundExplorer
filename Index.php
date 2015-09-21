<?php
	//Starts a session
	if(!session_start()) {
		$errorMessage = "Session did not start";
		require "Error.php";
		exit;
	}
	
	//Checks to see if user is logged in
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin']; 
	
	//Loads the Design
	require "Design.php";
?>
		