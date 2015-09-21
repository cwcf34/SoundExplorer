<div id="menu">
<ul id="tabs">	
	<?php
		if ($loggedIn) {
	?>
	<li>
		<a href="Page.php?page=Search">Search</a>
	</li>
	<li>
		<a href="Logout.php">Log Out</a>
	</li>
	
	<?php
	} else {
	?>
	<li>
		<a href="Login_form.php">Login</a>
	</li>
	<?php
	}
	?>

</ul>
</div>
	

