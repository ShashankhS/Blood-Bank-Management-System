<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Personnel</title>	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id = "frm">
		<h3>
			Welcome Blood Bank Personnel
		</h3>
		<p>
			<form action = "avail.php">
				<input type="submit" id = "btn" value="Available Blood units">
			</form>
		</p>
		<p>
			<form action = "newOrder.php">
				<input type="submit" id="btn" value="New order">
			</form>
		</p>
		<p>
			<form action = "viewAll.php">
				<input type="submit" id="btn" value="View all Donor records">
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