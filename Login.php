<?php

	// Checks to see if https is being used
	if ($_SERVER['HTTPS'] !== 'on') {
		$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header("Location: $redirectURL");
		exit;
	}
	
	//Starts a session
	if(!session_start()) {
		$errorMessage = "Session did not start";
		require "Error.php";
		exit;
	}
	
	//If login works, takes user back to the index
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if ($loggedIn) {
		header("Location: Index.php");
	}
	
	//Determines if the login action was requested
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	//Takes in in the variables and checks them
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
	
		if ($username == "test" && $password == "pass") {
			$_SESSION['loggedin'] = $username;
			header("Location: Index.php");
			exit;
		} else {
			$error = 'Login Failed. Please enter a valid username and password.';
			include "Design.php";
		}		
	}
	
	//Resets
	function login_form() {
		$username = "";
		$error = "";
	}
?>


