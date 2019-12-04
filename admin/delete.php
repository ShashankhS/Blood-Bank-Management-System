<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>
		Delete existing user.
	</h3>
	<div id="frm">
		<form action = "./deletion.php" method = "POST">
			<p>
				<label>Enter User name to be deleted: </label>
				<input type="text" name="user_id">
			</p>
			<p>
				<input type="submit" id="delete" value="Delete">
			</p>
		</form>
	</div>
	<form action = "./dashboard.php">
		<input type="submit" id = "btn" value="Dashboard">
	</form>
</body>
</html>