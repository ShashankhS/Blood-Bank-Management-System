<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id = "frm">
		<h3>
			Welcome Administrator
		</h3>
		<p>
			<form action = "create.php">
				<input type="submit" id = "btn" value="Create User">
			</form>
		</p>
		<p>
			<form action = "delete.php">
				<input type="submit" id="btn" value="Delete User">
			</form>
		</p>
		<p>
			<form action = "../login/logout.php">
				<input type="submit" id="delete" value="Logout">
			</form>
		</p>
	</div>
</body>
</html>