<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>
		Searching for a donor transaction
	</h3>
	<div id="frm">
		<form action = "./search.php" method = "POST">
			<p>
				<label>Enter unit number: </label>
				<input type="text" name="unit" required>
			</p>
			<p>
				<input type="submit" id="btn" value="Search">
			</p>
		</form>
	</div>
	<form action = "./dashboard.php">
		<input type="submit" id = "btn" value="Dashboard">
	</form>
</body>
</html>