<!DOCTYPE html>
<html>
<head>
	<title>Verify</title>	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id = "frm">
		<h2>
			Enter blood unit number:
		</h2>

		<form action = "verify.php" method = "POST">
			<p>
				<label>Blood unit number:</label>
				<input type="text" name="unit" id = "unit" required />
			</p>
			<p>
				<label>Re-enter blood unit number:</label>
				<input type="password" name="unit1" id = "unit1" required />
			</p>
			<p>
				<input type="submit" id = "btn" value="Verify" />
			</p>	
		</form>
	</div>
	<form action = "./dashboard.php">
		<input type="submit" id = "btn" value="Dashboard">
	</form>
</body>
</html>