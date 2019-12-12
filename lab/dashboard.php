<!DOCTYPE html>
<html>
<head>
	<title>Lab Attendant</title>	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id = "frm">
		<h3>
			Welcome Lab-in-charge
		</h3>
		<p>
			<form action = "newVerify.php">
				<input type="submit" id = "btn" value="Verify Healthy Blood">
			</form>
		</p>
		<p>
			<form action = "newDisease.php">
				<input type="submit" id="btn" value="Reject Blood">
			</form>
		</p>
		<p>
			<form action = "reqdVerify.php">
				<input type="submit" id="btn" value="Yet to be verified">
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