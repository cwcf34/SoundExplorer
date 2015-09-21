<?php
	//Starts a session
	if(!session_start()) {		
		$errorMessage = "Unable to start session.";
		require "Error.php";
		exit;	
	}
	
	
	$_SESSION = array(); // unset session variables
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', 1,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
		);
	}
	session_destroy(); // destroy session
	
	//Refreshes the page
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=Index.php\">";
	exit;
?>
