<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<h1>
		BLOOD BANK MANAGEMENT SYSTEM
	</h1>
	<div id = "frm">
		<form action = "loginChk.php" method = "POST">
			<p>
				<label>Username:</label>
				<input type="text" name="user" id = "user" />
			</p>
			<p>
				<label>Password:</label>
				<input type="password" name="pwd" id = "pwd" />
			</p>
			<p>
				<input type="submit" id = "btn" value="Login" />
			</p>
		</form>
	</div>
</body>
</html>
