<h1>Login</h1>
	<p>Please login to gain access to the website.</p>
	<form action="Login.php" method="POST">
		<input type="hidden" name="action" value="do_login">
		<p>
			<label for="username">User name: </label>
			<input type="text" name="username" id="username" value="Username">
		</p>
		<p>
			<label for="password">Password: </label>
			<input type="password" name="password" id="password">
		</p>
		<p>
			<input type="submit" name="submit" value="Submit">
		</p>
	</form>