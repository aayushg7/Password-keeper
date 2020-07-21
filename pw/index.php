<?php	session_start();	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>

	<div id="body">
			<div>
				<div class="login_div">
					<h3>Login</h3>
					<form action="./login_check.php" method="post" class="user">
						<label>username</label>
						<input type="email" name="username" required>
						<label>Password</label>
						<input type="password" name="password" required>
						<input type="submit" value="Login">
					</form>
				</div>
				<div class="register_div">
					<h3>Create User</h3>
					<form action="./registration.php" method="post" onsubmit="return true" class="user">
					   <label>username</label>
						<input type="email" name="username" required>
						<br>
						<label>Password</label>
						
						<input type="password" name="password" id="password" required>
						<br>
						<input type="submit" value="Create user">
					</form>
				</div>
			</div>
	</div>
	
</body>
</html>