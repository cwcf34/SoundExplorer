<?php
	// Make sure private data is secured using HTTPS
	if ($_SERVER['HTTPS'] !== 'on') {
		$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header("Location: $redirectURL");
		exit;
	}
	
	//Starts a session
	if(!session_start()) {
		$errorMessage = "Unable to start session.";
		 require "Error.php";
		exit;
	}
	
	//If not logged in reloads page
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if (!$loggedIn) {
		header("Location: Login.php");
		exit;
	}
	
	//Uses get to create url
	$page = empty($_GET['page']) ? "Search" : $_GET['page'];
	
	require $page . ".php";
?>